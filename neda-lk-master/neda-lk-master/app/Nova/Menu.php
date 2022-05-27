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
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Wehaa\Liveupdate\Liveupdate;

/**
 * Class Menu
 * @package App\Nova
 */
class Menu extends Resource
{
    use HasSortableRows;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Menu';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Menu::class;

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

            Text::make('Title English', 'title_en')
                ->rules('required'),

            Liveupdate::make('URL English', 'url_en')->onlyOnIndex(),

            Text::make('URL English', 'url_en')
                ->rules('required')
                ->creationRules('unique:menus,url_en')
                ->updateRules('unique:menus,url_en,{{resourceId}}')
                ->hideFromIndex(),

            Text::make('Title සිංහල', 'title_si')
                ->rules('required'),

            Liveupdate::make('URL සිංහල', 'url_si')->onlyOnIndex(),

            Text::make('URL සිංහල', 'url_si')
                ->rules('required')
                ->creationRules('unique:menus,url_si')
                ->updateRules('unique:menus,url_si,{{resourceId}}')
                ->hideFromIndex(),

            Text::make('Title தமிழ்', 'title_ta')
                ->rules('required'),

            Liveupdate::make('URL தமிழ்', 'url_ta')->onlyOnIndex(),

            Text::make('URL தமிழ்', 'url_ta')
                ->rules('required')
                ->creationRules('unique:menus,url_ta')
                ->updateRules('unique:menus,url_ta,{{resourceId}}')
                ->hideFromIndex(),

            Select::make('Model Type', 'model_type')->options([
                'document' => 'Document',
                'event' => 'Event',
                'gallery' => 'Gallery',
                'news' => 'News',
                'page' => 'Page'
            ]),

            Boolean::make('Status', 'status'),

            BelongsTo::make('Parent', 'parent', self::class)->nullable()

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
