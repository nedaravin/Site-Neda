<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use App\Nova\Filters\DistrictFilter;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use NrmlCo\NovaBigFilter\NovaBigFilter;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

/**
 * Class GramaNiladhariDivision
 * @package App\Nova
 */
class GramaNiladhariDivision extends Resource
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
    public static $model = \App\Models\Government\GramaNiladhariDivision::class;

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
                ->creationRules('unique:divisional_secretariats,machine_name')
                ->updateRules('unique:divisional_secretariats,machine_name,{{resourceId}}')
                ->hideFromIndex(),

            BelongsTo::make('Province', 'province', Province::class),

            BelongsTo::make('District', 'district', Province::class),

            BelongsTo::make('Divisional Secretariat', 'divisionalSecretariat', DivisionalSecretariat::class),

            Text::make('Title English', 'title_en')
                ->rules('required'),

            Textarea::make('Description English', 'description_en')
                ->rules('required'),

            Text::make('Title සිංහල', 'title_si')
                ->rules('required'),

            Textarea::make('Description සිංහල', 'description_si')
                ->rules('required'),

            Text::make('Title தமிழ்', 'title_ta')
                ->rules('required'),

            Textarea::make('Description தமிழ்', 'description_ta')
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
            new DistrictFilter()
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

    public static function label()
    {
        return 'GN Division';
    }
}
