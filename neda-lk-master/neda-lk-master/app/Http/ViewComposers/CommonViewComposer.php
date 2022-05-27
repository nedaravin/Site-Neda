<?php
declare(strict_types=1);
/**
 * Copyright (c) 2020. CameraLK - Adlux Software (Pvt) Ltd
 */

namespace App\Http\ViewComposers;

use App\Models\Content\Gallery;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;

class CommonViewComposer
{
    public function compose(View $view)
    {
        $main_menu = [];
        if (Cache::has('main_menu')) {
            $main_menu = Cache::get('main_menu');
        } else {
            // get menu items
            $main_menu = (new Menu())
                ->where('status', 1)
                ->whereNull('parent_id')
                ->with('children', function($q){
                    $q->where('status', 1)->orderBy('sort_order', 'ASC');
                })
                ->orderBy('sort_order', 'ASC')
                ->get();
            Cache::put('main_menu', $main_menu, Carbon::now()->addDay());
        }

        $full_menu = [];
        if (Cache::has('full_menu')) {
            $full_menu = Cache::get('full_menu');
        } else {
            $full_menu = (new Menu())
                ->where('status', 1)
                ->orderBy('sort_order', 'ASC')
                ->get();
            Cache::put('full_menu', $full_menu, Carbon::now()->addDay());
        }

        $view->with([
            'language' => app()->getLocale(),
            'main_menu' => $main_menu,
            'full_menu' => $full_menu,
            'agent' => new Agent(),
            'user' => auth('web')->check() ? auth('web')->user() : false
        ]);
    }
}
