<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Nova;

use Adlux\Nova\CKEditor;
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
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

/**
 * Class ContactRequest
 * @package App\Nova
 */
class ContactRequest extends Resource
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
    public static $model = \App\Models\ContactRequest::class;

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
        'subject',
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
            (new Panel(__('Contact Request Details'), [

                ID::make(__('ID'), 'id')->sortable(),

                Text::make(__('Name'), 'name')
                    ->rules('required', 'min:2'),

                Text::make(__('Email'), 'email')
                    ->rules('required', 'min:2'),

                Text::make(__('Subject'), 'subject')
                    ->rules('required', 'min:2'),

                CKEditor::make(__('Message'), 'message')->rules('required')->hideFromIndex(),
            ]))->withToolbar(),
        ],
            [(new Panel(__('Settings'), [

                Number::make(__('Sort Order'), 'sort_order')
                    ->hideFromIndex()
                    ->help(__('Sort order of the :model. This is an optional field which will be used if more than 1 page is displayed on a list.', [
                        'model' => 'Page'
                    ])),

                Boolean::make(__('Status'), 'status'),
            ]))],
        );
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
        return [
            (new DownloadExcel())
        ];
    }
}
