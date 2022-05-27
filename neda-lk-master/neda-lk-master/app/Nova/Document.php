<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Files;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

/**
 * Class Document
 * @package App\Nova
 */
class Document extends Resource
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
    public static $model = \App\Models\Content\Document::class;

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
        return array_merge([
            (new Panel(__('Resource Details'), [
                ID::make(__('ID'), 'id')->sortable(),
            ]))->withToolbar(),

        ], array_merge($this->contentFields(), [

            (new Panel(__('Media'), [

                Images::make(__('Cover'), 'cover')
                    ->hideFromIndex()
                    ->enableExistingMedia(),

                Images::make(__('Featured Image'), 'featured')
                    ->enableExistingMedia(),

                Images::make(__('Gallery'), 'gallery')
                    ->enableExistingMedia()
                    ->hideFromIndex(),

                Files::make('Downloadable Content', 'download_en')
                    ->hideFromIndex()
                    ->canSee(function () {
                        return app()->getLocale() === 'en';
                    }),

                Files::make('Downloadable Content', 'download_si')
                    ->hideFromIndex()
                    ->canSee(function () {
                        return app()->getLocale() === 'si';
                    }),

                Files::make('Downloadable Content', 'download_ta')
                    ->hideFromIndex()
                    ->canSee(function () {
                        return app()->getLocale() === 'ta';
                    }),
            ])),

            (new Panel(__('Settings'), [
                Number::make(__('Sort Order'), 'sort_order')
                    ->hideFromIndex()
                    ->help(__('Sort order of the :model. This is an optional field which will be used if more than 1 page is displayed on a list.', [
                        'model' => 'Page'
                    ])),

                Boolean::make(__('Status'), 'status'),
            ])),

            Select::make('Category', 'category')
                ->options([
                    'reports' => 'Reports',
                    'directory' => 'Directory',
                    'policies' => 'Policies',
                    'guide_book' => 'Guide Book',
                    'related_link' => 'Related Link'
                ])->displayUsing(function ($value) {
                    if ($value) {
                        return ucwords(str_replace('_', ' ', $value));
                    }
                    return $value;
                }),

            BelongsTo::make('Parent', 'parent', self::class)->nullable()
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

    /**
     * Get the displayable label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return __('Resources');
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
}
