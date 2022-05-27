<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use App\Models\Content\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('event.index', [
            'national' => (new Event())->whereDate('event_start', '>=', Carbon::now())->where('type', 'national')->paginate(),
            'regional' => (new Event())->whereDate('event_start', '>=', Carbon::now())->where('type', 'regional')->paginate(),
            'other' => (new Event())->whereDate('event_start', '>=', Carbon::now())->where('type', 'other')->paginate(),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, string $language, string $slug)
    {
        $event = (new Event())->where('slug_' . app()->getLocale(), $slug)->first();

        return view('event.show', [
            'model' => $event
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function national(Request $request)
    {
        return view('event.national', [
            'national' => (new Event())->whereDate('event_start', '>=', Carbon::now())->where('type', 'national')->paginate()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function regional(Request $request)
    {
        return view('event.regional', [
            'regional' => (new Event())->whereDate('event_start', '>=', Carbon::now())->where('type', 'regional')->paginate()
        ]);
    }
}
