<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use App\Nova\Filters\DevelopmentOfficerFilter;
use App\Nova\Lenses\DSReport;
use App\Nova\Lenses\DSUserReport;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use NovaAttachMany\AttachMany;
use NrmlCo\NovaBigFilter\NovaBigFilter;
use App\Nova\Filters\EntrepreneurTypeOfBusiness;
use App\Nova\Filters\EntrepreneurDistrict;
use App\Nova\Filters\EntrepreneurDivisionalSecretariat;
use App\Nova\Actions\ExcelExport;

/**
 * Class Entrepreneur
 * @package App\Nova
 */
class Entrepreneur extends Resource
{
    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Entrepreneurs';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Entrepreneur::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'email',
        'nic',
        'business_registration_number'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [

            ID::make(__('ID'), 'id')
                ->sortable()
                ->hideFromIndex(),

            (new Panel('Personal Information', [

                Text::make('Email', 'email')->rules('email'),

                Text::make('Name', 'name'),

                Text::make('Last Name', 'last_name')->hideFromIndex(),

                Select::make('Gender', 'gender')->options([
                    'male' => 'Male',
                    'female' => 'Female'
                ])->hideFromIndex(),

                Date::make('Birthday', 'birthday')->hideFromIndex(),

                Text::make('NIC', 'nic')->hideFromIndex(),

                Text::make('Address', 'address'),

                Text::make('Mobile', 'mobile'),

                Text::make('Phone', 'phone')->hideFromIndex(),
            ])),

            (new Panel('Business Information', [
                Text::make('Business Name', 'business_name')->hideFromIndex(),

                Textarea::make('Business Description', 'business_description')->hideFromIndex(),

                Text::make('Business Phone', 'business_phone')->hideFromIndex(),

                Textarea::make('Business Address', 'business_address')->hideFromIndex(),

                Date::make('Business Start Date', 'business_start_date')->hideFromIndex(),

                Select::make('Business Legal Nature', 'business_legal_nature')
                    ->options([
                        'sole_proprietorship' => 'Sole Proprietorship',
                        'public_limited_company' => 'Public Limited Company',
                        'limited_liability_company' => 'Limited Liability Company',
                        'partnership' => 'Partnership',
                        'others' => 'Others'
                    ])->hideFromIndex(),

                Select::make('Business Registration Status', 'business_registration_status')
                    ->options([
                        'registered' => 'Registered',
                        'not_registered' => 'Not Registered'
                    ])->hideFromIndex(),

                Text::make('Business Registration Number', 'business_registration_number')->hideFromIndex(),

                Select::make('Business Type', 'business_type')->options([
                    'manufacturing' => 'Manufacturing',
                    'service' => 'Service',
                    'trading' => 'Trading'
                ])->hideFromIndex(),

                Select::make('Business Annual turnover', 'business_annual_turnover')->options([
                    '15mil_or_less' => '15mil_or_less',
                    '16mil_250mil' => '16mil_250mil',
                    '251mil_750mil' => '251mil_750mil',
                    'more_than_751mil' => 'more_than_751mil'
                ])->hideFromIndex(),

                Select::make('Business Number of employees', 'business_number_of_employees')->options([
                    '10_or_less' => '10_or_less',
                    '11_50' => '11_50',
                    '51_200' => '51_200',
                    'more_than_201' => 'more_than_201'
                ])->hideFromIndex(),

                BelongsTo::make('Primary Business Sector', 'businessService', BusinessServiceType::class)
                    ->hideFromIndex(),

                BelongsTo::make('Sub Business Services', 'subBusinessService', BusinessServiceType::class)
                    ->hideFromIndex(),

                AttachMany::make('Sub Business Services', 'businessServices', BusinessServiceType::class)
                    ->hideFromIndex(),

                BelongsToMany::make('Sub Business Sectors', 'businessServices', BusinessServiceType::class)
                    ->hideFromIndex(),

                BelongsTo::make('Province', 'province', Province::class)
                    ->hideFromIndex(),

                BelongsTo::make('District', 'district', District::class)
                    ->hideFromIndex(),

                BelongsTo::make('DS Division', 'divisionalSecretariat', DivisionalSecretariat::class)
                    ->hideFromIndex(),

                BelongsTo::make('GN Division', 'gramaNiladhariDivision', GramaNiladhariDivision::class)
                    ->hideFromIndex(),

                Boolean::make('Business Located In Industrial Zone', 'business_located_in_industrial_zone')
                    ->hideFromIndex(),

                Select::make('Industrial zone', 'business_zone_type')->options([
                    'idb' => 'idb',
                    'boi' => 'boi',
                    'moi' => 'moi',
                    'pc' => 'pc'
                ])
                    ->hideFromIndex(),
            ])),

            (new Panel('Validation Information', [
                BelongsTo::make('Development Officer', 'developmentOfficer', User::class)
                    ->canSee(function () {
                        return auth()->user()->hasRole('Site Administrator');
                    }),

                Boolean::make('Submission Valid', 'is_valid'),

                Boolean::make('Submission Active', 'status'),
            ])),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            (new NovaBigFilter())
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [

            (new EntrepreneurTypeOfBusiness),

            (new DevelopmentOfficerFilter)->canSee(function () {
                return auth()->user()->hasRole('Site Administrator');
            }),

            (new EntrepreneurDistrict)->canSee(function () {
                return auth()->user()->hasRole('Site Administrator');
            }),

            (new EntrepreneurDivisionalSecretariat)->canSee(function () {
                return auth()->user()->hasRole('Site Administrator');
            })

        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [
            (new DSReport()),
            (new DSUserReport()),
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            (new DownloadExcel())->withHeadings()->allFields()
        ];
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        if (!auth()->user()->hasRole('Site Administrator')) {
            return $query->where('user_id', auth()->user()->id);
        }
        return parent::indexQuery($request, $query);
    }

    public static function label()
    {
        return 'Entrepreneurs & Businesses';
    }
}
