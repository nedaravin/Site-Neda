<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;


use Ebess\AdvancedNovaMediaLibrary\Fields\Files;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use NovaAttachMany\AttachMany;


/**
 * Trait UserFieldTrait
 * @package App\Nova
 */
trait UserFieldTrait
{
    public function getUserFields($user_group = null)
    {
        return [
            ID::make()->sortable(),

            (new Panel('Profile', [

                Text::make('Email', 'email')
                    ->sortable()
                    ->rules('required', 'email', 'max:254')
                    ->creationRules('unique:users,email')
                    ->updateRules('unique:users,email,{{resourceId}}'),

                Password::make('Password', 'password')
                    ->onlyOnForms()
                    ->creationRules('required', 'string', 'min:8')
                    ->updateRules('nullable', 'string', 'min:8'),

                Text::make('Name', 'name')
                    ->sortable()
                    ->rules('required', 'max:255'),

                Text::make('First Name', 'first_name')
                    ->hideFromIndex(),

                Text::make('Last Name', 'last_name')
                    ->hideFromIndex(),

                Textarea::make('BIO', 'bio')
                    ->hideFromIndex(),

                Select::make('Gender', 'gender')->options([
                    'male' => 'Male',
                    'female' => 'Female'
                ])
                    ->hideFromIndex(),

                Date::make('Birthday', 'birthday')
                    ->hideFromIndex(),

                Text::make('NIC', 'national_identification_card_no'),

                Textarea::make('Qualifications', 'qualifications'),

                Date::make('Maternity Leave Start', 'maternity_leave_start')->canSee(function() use($user_group){
                    return $user_group && $user_group == 'development_officer';
                }),

                Date::make('Maternity Leave End', 'maternity_leave_end')->canSee(function() use($user_group){
                    return $user_group && $user_group == 'development_officer';
                }),

                Date::make('Appointed Date', 'appointed_date')->canSee(function() use($user_group){
                    return $user_group && $user_group == 'development_officer';
                }),

                Images::make('Avatar', 'avatar')
                    ->hideFromIndex()

            ])),

            (new Panel('Contact', [
                Textarea::make('Address', 'address')
                    ->hideFromIndex(),

                Text::make('Mobile', 'mobile'),

                Boolean::make('Mobile Validated', 'mobile_validated')
                    ->hideFromIndex(),

                Text::make('Phone', 'phone')
                    ->hideFromIndex(),

                BelongsTo::make('District', 'district_model', District::class),

                BelongsTo::make('Divisional Secretariat', 'divisional_secretariat_model', DivisionalSecretariat::class)->nullable(),
            ])),

//            (new Panel('Business', [
//
//                Text::make('Name', 'business_name')
//                    ->hideFromIndex(),
//
//                Text::make('Phone', 'business_phone')
//                    ->hideFromIndex(),
//
//                Date::make('Start Date', 'business_start_date')
//                    ->hideFromIndex(),
//
//                Text::make('Nature Of Business', 'legal_nature_of_business')
//                    ->hideFromIndex(),
//
//                Text::make('Business Registration Number', 'business_registration_number')
//                    ->hideFromIndex(),
//
//                Text::make('Total Invested', 'total_invested')
//                    ->hideFromIndex(),
//
//                Text::make('Number Of Employees', 'number_of_employees')
//                    ->hideFromIndex(),
//
//                Text::make('Primary Industry', 'primary_industry')
//                    ->hideFromIndex(),
//
//                Text::make('Type Of Products Or Services', 'type_of_products_or_services')
//                    ->hideFromIndex(),
//
//            ])),
//
//            (new Panel('Business Address', [
//
//                Text::make('Business Address', 'business_address')
//                    ->hideFromIndex(),
//
//                Text::make('District', 'district')
//                    ->hideFromIndex(),
//
//                Text::make('Divisional Secretariat', 'divisional_secretariat')
//                    ->hideFromIndex(),
//
//                Text::make('GN Division', 'gn_division')
//                    ->hideFromIndex(),
//
//                //'divisional_secretariat_id',
//                //'gn_division_id',
//
//            ])),
//
//            (new Panel('Business Documents', [
//                Files::make('Business documents', 'documents')
//                    ->hideFromIndex(),
//            ])),

            (new Panel('Authentication', [

                AttachMany::make('Roles', 'roles', \Vyuldashev\NovaPermission\Role::class)->canSee(function(){
                    return auth('web')->user()->hasRole('Super Administrator');
                })

            ])),

            MorphToMany::make('Roles', 'roles', \Vyuldashev\NovaPermission\Role::class),

            MorphToMany::make('Permissions', 'permissions', \Vyuldashev\NovaPermission\Permission::class),
        ];
    }
}
