<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use Adlux\VideoField\VideoField;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Panel;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

/**
 * Class Video
 * @package App\Nova
 */
class Video extends Resource
{
    use HasSortableRows,
        TranslatableContentSupport;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Content';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Content\Video::class;

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
        $video_field = [];

        foreach (config('app.languages') as $language => $label) {
            $video_field = array_merge($video_field, [
                VideoField::make('Video Link', 'video_link_en')
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    }),
            ]);
        }

        return array_merge([

            (new Panel(__('Video Details'), [

                ID::make(__('ID'), 'id')->sortable(),

                BelongsTo::make('Parent', 'parent', self::class)->nullable()

            ]))->withToolbar(),

        ], array_merge($this->contentFields(), [

            (new Panel(__('Media'), array_merge([

                Images::make(__('Featured'), 'featured')
                    ->enableExistingMedia(),

            ], $video_field))),

            (new Panel(__('Settings'), [

                Select::make('Category', 'category')
                    ->options([
                        'education' => 'Education',
                        'general' => 'General',
                        'event' => 'Event',
                        'other' => 'Other'
                    ])
                    ->rules('required'),

                Number::make(__('Sort Order'), 'sort_order')
                    ->hideFromIndex()
                    ->help(__('Sort order of the :model. This is an optional field which will be used if more than 1 page is displayed on a list.', [
                        'model' => 'Page'
                    ])),

                Boolean::make(__('Status'), 'status'),
            ]))
        ]));
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
