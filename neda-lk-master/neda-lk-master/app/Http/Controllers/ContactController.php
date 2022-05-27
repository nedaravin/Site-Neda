<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use App\Models\Auth\User;
use App\Models\ContactRequest;
use App\Models\Content\Gallery;
use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use App\Models\Government\Province;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $do_list = (new User())
            ->whereHas('roles', function($q){
                $q->where('id', 3);
            });

        if($request->has('district')){
            $do_list->where('district_id', $request->get('district'));
        }

        return view('contact', [
            'province' => (new Province())->orderBy('id', 'ASC')->get(),
            'district' => (new District())->orderBy('id', 'ASC')->get(),
            'divisional_secretariat' => (new DivisionalSecretariat())->orderBy('id', 'ASC')->get(),
            'do_list' => $do_list->paginate(10)->appends(request()->query())
        ]);
    }

    /**
     * Store a newly created contact in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'captcha' => 'required|captcha'
        ]);

        $contact = (new ContactRequest())->create($request->all());

         Mail::send(new \App\Mail\ContactRequest([
             'name' => $contact->name,
             'email' => $contact->email,
             'subject' => $contact->subject,
             'email_subject' => __('New Contact Request'),
             'message' => $contact->message,
             'cc' => (!empty(config('mail.cc'))) ? config('mail.cc') : null
         ]));

        session()->flash('message', __('Thank you your message has been sent.'));

        return redirect()->route('contact', app()->getLocale());
    }
}
