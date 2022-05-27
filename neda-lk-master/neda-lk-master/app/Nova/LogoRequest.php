<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use App\Models\Forms\LogoRequest as LogoRequestModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

/**
 * Class LogoRequest
 * @package App\Nova
 */
class LogoRequest extends Resource
{
    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Forms & Surveys';

    /**
     * @var string
     */
    public static $model = LogoRequestModel::class;

    /**
     * @var string
     */
    public static $title = 'id';

    /**
     * @var string[]
     */
    public static $search = [
        'name',
        'email'
    ];

    /**
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Name', 'name'),

            Text::make('Email', 'email'),

            Text::make('Mobile', 'mobile'),

            Text::make('Business name', 'business_name'),

            Text::make('Business registration number', 'business_registration_number'),

            Text::make('Type Of Products Or Services', 'type_of_products_or_services'),

            Text::make('Business Address', 'business_address'),
        ];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            (new DownloadExcel())->withHeadings()->allFields()
        ];
    }
}
