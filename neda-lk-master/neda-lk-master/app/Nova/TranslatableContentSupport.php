<?php
declare(strict_types=1);
/**
 * Copyright (c) 2020. Adlux Software (Pvt) Ltd -  All Rights Reserved
 */

namespace App\Nova;


use Adlux\CharcountedFields\TextareaCounted;
use Adlux\Nova\CKEditor;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;

trait TranslatableContentSupport
{
    public function contentFields()
    {

        // get table name
        $table = $this->resource->getTable();

        // get base name from the model
        $class_basename = class_basename($this->resource);

        // get resource name from the model
        $resource_name = '<b>' . __($class_basename) . '</b>';

        // content fields
        $content_fields = [];

        // seo fields.
        $seo_fields = [];

        foreach (config('app.languages') as $language => $label) {

            $content_fields = array_merge($content_fields, [

                TextWithSlug::make(__('Title'), 'title_' . $language)
                    ->rules('required')
                    ->creationRules('unique:' . $table . ',title_' . $language)
                    ->updateRules('unique:' . $table . ',title_' . $language . ',{{resourceId}}')
                    ->slug('slug_' . $language)
                    ->help(__('The title of the :model.', [
                        'model' => __(strtolower($resource_name))
                    ]))
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    }),

                Slug::make(__('URL'), 'slug_' . $language)
                    ->rules('required')
                    ->creationRules('unique:' . $table . ',slug_' . $language)
                    ->showOnCreating()
                    ->hideWhenUpdating()
                    ->onlyOnForms()
                    ->help(__('The URL of the :model.', [
                        'model' => __(strtolower($resource_name))
                    ]))
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    }),

                Text::make(__('URL'), 'slug_' . $language)
                    ->rules('required')
                    ->updateRules('unique:' . $table . ',slug_' . $language . ',{{resourceId}}')
                    ->showOnUpdating()
                    ->hideWhenCreating()
                    ->displayUsing(function($value){
                        if($value){
                            return Str::limit($value, 20);
                        }
                        return $value;
                    })
                    ->help(__('The URL of the :model. <span class="text-danger">WARNING: Changing this might break page access. Contact Admin if this field is required to update</span>', [
                        'model' => __(strtolower($resource_name))
                    ]))
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    }),

                TextareaCounted::make(__('Summary'), 'summary_' . $language)
                    ->maxChars(250)
                    ->warningAt(225)
                    ->hideFromIndex()
                    ->help(__('Optional summary for the :model.', [
                        'model' =>
                            (class_basename($this->resource) !== 'Page') ? __(strtolower($resource_name)) : __(strtolower($resource_name)) . '.  ' . __('In some pages this content will be displayed before the main content of the :model.')
                    ]))
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    }),

                CKEditor::make(__('Content'), 'content_' . $language)
                    ->hideFromIndex()
                    ->help(__('Main content of the :model.', [
                        'model' => __(strtolower($resource_name))
                    ]))
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    })
            ]);

            // Add SEO fields
            $seo_fields = array_merge($seo_fields, [

                Text::make(__('Meta Title'), 'meta_title_' . $language)
                    ->rules('required')
                    ->creationRules('unique:' . $table . ',meta_title_' . $language)
                    ->updateRules('unique:' . $table . ',meta_title_' . $language . ',{{resourceId}}')
                    ->help(__('SEO title of the :model. This is the title which will be displayed on Google or other search results.', [
                        'model' => __(strtolower($resource_name))
                    ]))
                    ->hideFromIndex()
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    }),

                TextareaCounted::make(__('Meta Content'), 'meta_content_' . $language)
                    ->maxChars(250)
                    ->warningAt(225)
                    ->help(__('SEO friendly description of the :model. This content will be displayed when this page is shown as a result on Google or other search engines.', [
                        'model' => __(strtolower($resource_name))
                    ]))
                    ->hideFromIndex()
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    }),

                TextareaCounted::make(__('Meta Keywords'), 'meta_keywords_' . $language)
                    ->maxChars(250)
                    ->warningAt(225)
                    ->help(__('SEO keywords of the :model. All search words which this page can be found on a search engine.', [
                        'model' => __(strtolower($resource_name))
                    ]))
                    ->hideFromIndex()
                    ->canSee(function () use ($language) {
                        return app()->getLocale() === $language;
                    })
            ]);
        }


        return [
            (new Panel(__(ucwords(request()->get('editMode') . ' ' . $class_basename)), $content_fields)),

            (new Panel(__('SEO'), $seo_fields)),
        ];
    }
}
