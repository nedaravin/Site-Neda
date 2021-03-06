<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Wehaa\Liveupdate\Liveupdate;

/**
 * Class District
 * @package App\Nova
 */
class District extends Resource
{
    use HasSortableRows;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Other';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Government\District::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title_en',
        'title_si',
        'title_ta',
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
            ID::make()->sortable(),

            Text::make('Machine Name', 'machine_name')
                ->rules('required')
                ->creationRules('unique:districts,machine_name')
                ->updateRules('unique:districts,machine_name,{{resourceId}}')
                ->hideFromIndex(),

            BelongsTo::make('Province', 'province', Province::class),

            Text::make('Title English', 'title_en')
                ->rules('required'),

            Textarea::make('Description English', 'description_en')
                ->rules('required'),

            Text::make('Title ???????????????', 'title_si')
                ->rules('required'),

            Textarea::make('Description ???????????????', 'description_si')
                ->rules('required'),

            Text::make('Title ???????????????', 'title_ta')
                ->rules('required'),

            Textarea::make('Description ???????????????', 'description_ta')
                ->rules('required'),

            Boolean::make('Status', 'status'),

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
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
