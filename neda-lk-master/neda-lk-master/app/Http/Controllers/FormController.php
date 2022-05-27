<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;


use App\Models\Forms\BackToBusiness;
use App\Models\Forms\LogoRequest;
use App\Models\Forms\RecruitmentOfManagementAssistant2021;
use App\Models\Forms\RecruitmentOfStaffApplication2021;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class FormController
 * @package App\Http\Controllers
 */
class FormController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function backToBusiness(Request $request)
    {
        $model = false;

        if ($request->has('form') && $request->has('id') && is_string($request->get('id'))) {

            $string_model_ud = base64_decode($request->get('id'));

            $model_id = (int)preg_replace('/^neda_|_adlux/', '', $string_model_ud);

            $model = (new BackToBusiness())->findOrFail($model_id);

        }

        return view('forms.back_to_business', [
            'form_data' => $model
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function backToBusinessSave(Request $request)
    {

        // $request->offsetSet('birthday', Carbon::parse($request->get('year') . '-' . $request->get('month') . '-' . $request->get('date')));

        if(!$request->has('business_start_date')){
            $request->offsetSet('business_start_date', Carbon::now());
        }
        
        if(!$request->has('birthday')){
            $request->offsetSet('birthday', Carbon::now());
        }
        
        // $request->offsetSet('business_start_date', Carbon::parse($request->get('business_start_date') . '-1-1'));

        $back_to_business = (new BackToBusiness())->create($request->all());

        return redirect(route('form.back_to_business') . '?form=success&id=' . base64_encode('neda_' . $back_to_business->id . '_adlux'));
    }

    /**
     * @param Request $request
     */
    public function logoRequest(Request $request)
    {
        return view('forms.logo_request');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logoRequestSave(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "mobile" => "required",
            "business_name" => "required",
            "business_registration_number" => "required",
            "type_of_products_or_services" => "required",
            "business_address" => "required",
        ]);

        (new LogoRequest())->create($request->all());

        return redirect(route('form.logo_request') . '?form=success');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function recruitmentOfStaff(Request $request)
    {
        return view('forms.recruitment_of_staff');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function recruitmentOfStaffSave(Request $request)
    {
        $request->validate([
            "full_name" => "required",
            "birthday" => "required|date",
        ]);


        $request->offsetSet('birthday', Carbon::parse($request->get('birthday')));

        $model = (new RecruitmentOfStaffApplication2021())->create($request->all());

        if ($model && $request->hasFile('profile_picture')) {
            $model->addMediaFromRequest('profile_picture')->toMediaCollection('profile_picture', 's3');
        }

        if ($model && $request->has('qualifications')) {
            foreach ($request->file('qualifications') as $file){
                $model->addMedia($file)->toMediaCollection('qualifications', 's3');
            }
        }

        if ($model && $request->has('letters')) {
            foreach ($request->file('letters') as $file){
                $model->addMedia($file)->toMediaCollection('letters', 's3');
            }
        }

        return redirect(route('form.recruitment_of_staff') . '?form=success');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function recruitmentOfManagementAssistant(Request $request)
    {
        return view('forms.recruitment_of_management_assistant');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function recruitmentOfManagementAssistantSave(Request $request)
    {
        $request->validate([
            "full_name" => "required",
            "birthday" => "required|date",
        ]);

        $request->offsetSet('birthday', Carbon::parse($request->get('birthday')));

        $model = (new RecruitmentOfManagementAssistant2021())->create($request->all());

        if ($model && $request->hasFile('profile_picture')) {
            $model->addMediaFromRequest('profile_picture')->toMediaCollection('profile_picture', 's3');
        }

        if ($model && $request->has('qualifications')) {
            foreach ($request->file('qualifications') as $file){
                $model->addMedia($file)->toMediaCollection('qualifications', 's3');
            }
        }

        if ($model && $request->has('letters')) {
            foreach ($request->file('letters') as $file){
                $model->addMedia($file)->toMediaCollection('letters', 's3');
            }
        }

        return redirect(route('form.recruitment_of_management_assistant') . '?form=success');
    }
}
