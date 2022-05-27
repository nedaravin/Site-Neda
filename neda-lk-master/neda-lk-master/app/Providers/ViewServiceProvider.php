<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020.  Adlux Software (Pvt) Ltd -  All Rights Reserved
 */

namespace App\Providers;

use App\Http\ViewComposers\CommonViewComposer;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * Class ViewServiceProvider
 * @package App\Providers
 */
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // bind global composer to all the models
        view()->composer('*', CommonViewComposer::class);

        // dynamically create language blade component based on the active languages
        foreach (config('app.languages') as $locale => $label) {
            Blade::if($locale, function () use ($locale) {
                return app()->getLocale() === $locale;
            });
        }
    }
}
