<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

declare(strict_types=1);

namespace App\Nova;

use Adlux\Nova\CKEditor;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

/**
 * Class ContentBlock
 * @package App\Nova
 */
class ContentBlock extends Resource
{
    use HasSortableRows,
        TranslatableContentSupport;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Theme';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Theme\ContentBlock::class;

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
            (new Panel(__('Content Block details'), [
                ID::make(__('ID'), 'id')->sortable()
                    ->canSee(function ($request) {
                        return $request->user()->hasRole('Administrator');
                    }),

                Text::make(__('Title'), 'title_en')
                    ->rules('required')
                    ->canSee(function () {
                        return app()->getLocale() === 'en';
                    }),

                Text::make(__('Title'), 'title_si')
                    ->rules('required')
                    ->canSee(function () {
                        return app()->getLocale() === 'si';
                    }),

                Text::make(__('Title'), 'title_ta')
                    ->rules('required')
                    ->canSee(function () {
                        return app()->getLocale() === 'ta';
                    }),

                CKEditor::make(__('Content'), 'content_en')->rules('required')
                    ->canSee(function () {
                        return app()->getLocale() === 'en';
                    })->hideFromIndex(),

                CKEditor::make(__('Content'), 'content_si')->rules('required')
                    ->canSee(function () {
                        return app()->getLocale() === 'si';
                    })->hideFromIndex(),

                CKEditor::make(__('Content'), 'content_ta')->rules('required')
                    ->canSee(function () {
                        return app()->getLocale() === 'ta';
                    })->hideFromIndex(),


                Text::make(__('Link'), 'link_en')
                    ->canSee(function () {
                        return app()->getLocale() === 'en';
                    }),

                Text::make(__('Link'), 'link_si')
                    ->canSee(function () {
                        return app()->getLocale() === 'si';
                    }),

                Text::make(__('Link'), 'link_ta')
                    ->canSee(function () {
                        return app()->getLocale() === 'ta';
                    }),

                Text::make(__('Link Text'), 'link_text_en')
                    ->canSee(function () {
                        return app()->getLocale() === 'en';
                    }),

                Text::make(__('Link Text'), 'link_text_si')
                    ->canSee(function () {
                        return app()->getLocale() === 'si';
                    }),

                Text::make(__('Link Text'), 'link_text_ta')
                    ->canSee(function () {
                        return app()->getLocale() === 'ta';
                    }),

                Images::make(__('Featured'), 'featured')
                    ->enableExistingMedia(),

            ]))->withToolbar(),
            (new Panel(__('Settings'), [

                Number::make(__('Sort Order'), 'sort_order')
                    ->hideFromIndex()
                    ->help(__('Sort order of the :model. This is an optional field which will be used if more than 1 page is displayed on a list.', [
                        'model' => 'Page'
                    ])),

                Boolean::make(__('Status'), 'status'),
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

    /**
     * Get the value that should be displayed to represent the resource.
     *
     * @return string
     */
    public function title()
    {
        return $this->{'title_' . app()->getLocale()};
    }

    /**
     * Get the logical group associated with the resource.
     *
     * @return string
     */
    public static function group()
    {
        return __(static::$group);
    }

    /**
     * Get the text for the create resource button.
     *
     * @return string|null
     */
    public static function createButtonLabel()
    {
        return __('Create ' . class_basename(self::$model));
    }
}
