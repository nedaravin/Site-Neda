<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Providers;

use App\Models\Content\Gallery;
use App\Models\Content\Page;
use Carbon\Carbon;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibrary\Models\Media;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            /**
             * Define the "global" routes for the application.
             *
             * These routes all receive session state, CSRF protection, etc.
             *
             * @return void
             */
            Route::get('/language/switch/{language}', [
                'middleware' => ['web'],
                'as' => 'language.switch',
                'uses' => function (Request $request, string $language) {

                    // get all the system available languages to a local variable
                    $system_languages = config('app.languages');

                    // validate the language parsed exists in the local config
                    if (array_key_exists($language, $system_languages)) {

                        // if the key exists, change the app language and set the session with the new language
                        app()->setLocale($language);

                        // set session token
                        session()->put(['language' => $language]);
                    }

                    // If a redirect param exists, redirect the user to the redirect URL
                    if ($request->has('redirect')) {
                        return redirect($request->get('redirect'));
                    }

                    // Else redirect the user to the home page.
                    return redirect(self::HOME);
                }
            ]);

            /**
             * Check the route has a 'page_slug' load the page model
             */
            Route::bind('page_slug', function ($value) {
                $cache_key = 'slug_' . app()->getLocale() . '_' . $value;
                if (Cache::has($cache_key)) {
                    return Cache::get($cache_key);
                } else {
                    $page = (new Page())
                            ->with(['media', 'children', 'parent'])
                            ->where('slug_' . app()->getLocale(), $value)
                            ->first() ?? abort(404);

                    Cache::put($cache_key, $page, Carbon::now()->addDay());
                    return $page;
                }
            });
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
