<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/**
 * Class Language
 * @package App\Http\Middleware
 */
class Language
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // check if there is an active language key in the session and set it as the default
        if (Session::exists('language')) {
            App::setLocale(Session::get('language'));
        }

        // check if there is language prefix
        if ($request->route('language')) {
            // if found check if the language is valid
            if ($this->is_language_valid($request->route('language'))) {
                // check if the route language is not the system session language
                if ($request->route('language') != App::getLocale()) {
                    // set app locale with the active language
                    App::setLocale($request->route('language'));
                    // set session language variable to the new language
                    Session::put(['language' => $request->route('language')]);
                }
                return $next($request);
            }
        }

        // check if there is an active language in the session
        if (!Session::exists('language')) {
            // set app locale with the active language
            App::setLocale(config('app.fallback_locale'));
            // set session language variable to the new language
            Session::put(['language' => config('app.fallback_locale')]);
        }

        return $next($request);
    }

    /**
     * Check if the language is correct and it exists in the config
     * @param string $language
     * @return bool
     */
    private function is_language_valid(string $language): bool
    {
        if (strlen($language) && array_key_exists($language, config('app.languages'))) {
            return true;
        }
        return false;
    }
}
