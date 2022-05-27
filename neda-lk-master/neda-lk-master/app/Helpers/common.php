<?php
declare(strict_types=1);

/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use App\Models\Content\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Spatie\Valuestore\Valuestore;

if (!function_exists('asset_path')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     * @return \Illuminate\Support\HtmlString|string
     *
     * @throws \Exception
     */
    function asset_path($path, $manifestDirectory = '')
    {
        $mixPath = mix($path, $manifestDirectory);
        $cdnUrl = config('assets.cdn_url');
        $env = config('app.env');

        // Reference CDN assets only in production or staging environment.
        // In other environments, we should reference locally built assets.
        if ($cdnUrl && ($env === 'production' || $env === 'staging')) {
            $mixPath = $cdnUrl . $mixPath;
        }

        return $mixPath;
    }
}

if (!function_exists('image')) {
    /**
     * Get image path based on the domain
     *
     * @param $path
     * @return string
     */
    function image($path): string
    {
        $domain = env('MIX_DOMAIN');

        return asset($domain . '/' . $path);
    }
}

if (!function_exists('menu')) {
    /**
     * Get menu object
     *
     * @param int $menu_id
     * @return \App\Models\Theme\Menu|null
     */
    function menu(int $menu_id): ?\Illuminate\Support\Collection
    {
        if ($menu_id) {

            // check if a menu cache exist
            if (\Illuminate\Support\Facades\Cache::has('menu_cache_' . $menu_id) && env('CACHE_ENABLED')) {
                return \Illuminate\Support\Facades\Cache::get('menu_cache_' . $menu_id);
            }

            // get menu based on ID
            $menu = (new \App\Models\Theme\Menu())
                ->with(['items' => function ($q) {
                    $q->where('status', 1)->orderBy('weight', 'ASC');
                }])
                ->where('status', 1)
                ->find($menu_id);

            // menu items
            $menu_items = [];

            if ($menu && $menu->items && $menu->items->count()) {
                foreach ($menu->items as $item) {
                    if (!$item->parent->count()) {

                        $menu_item = [
                            'item' => [
                                'title' => $item->title,
                                'slug' => ($item->prefix ? $item->prefix : '/') . str_replace('/', '', $item->slug),
                            ],
                            'children' => []
                        ];

                        if ($item->children && $item->children->count()) {
                            foreach ($item->children()->orderBy('weight', 'ASC')->get() as $ck => $child_item) {
                                $menu_item['children'][$ck] = [
                                    'item' => [
                                        'title' => $child_item->title,
                                        'slug' => ($child_item->prefix ? $child_item->prefix : '/') . str_replace('/', '', $child_item->slug),
                                        'children' => []
                                    ]
                                ];

                                if ($child_item->children && $child_item->children->count()) {
                                    foreach ($child_item->children()->orderBy('weight', 'ASC')->get() as $sck => $second_child_item) {
                                        $menu_item['children'][$ck]['children'][$sck] = [
                                            'item' => [
                                                'title' => $second_child_item->title,
                                                'slug' => ($second_child_item->prefix ? $second_child_item->prefix : '/') . str_replace('/', '', $second_child_item->slug),
                                                'children' => []
                                            ]
                                        ];
                                    }
                                }
                            }
                        }

                        $menu_items[] = $menu_item;
                    }
                }

                // set the menu cache
                \Illuminate\Support\Facades\Cache::put('menu_cache_' . $menu_id, collect($menu_items), now()->addDay());

                // return collection
                return collect($menu_items);
            }
        }

        return null;
    }
}

if (!function_exists('content_block')) {
    /**
     * Get content block HTML based on the content block ID
     *
     * @param $content_block_id
     * @return array|null
     */
    function content_block($content_block_id): ?array
    {
        $cache_key = 'content_block_' . $content_block_id . '_' . app()->getLocale();

        $content_block = null;
        if (Cache::has($cache_key)) {
            $content_block = Cache::get($cache_key);
        } else {
            $block = (new \App\Models\Theme\ContentBlock())->where('id', $content_block_id)->with('media')->first();

            if ($block && $block->status) {
                $content_block = [
                    'id' => $block->id,
                    'title' => $block->title,
                    'content' => $block->content,
                    'link' => $block->{'link_' . app()->getLocale()},
                    'link_text' => $block->{'link_text_' . app()->getLocale()},
                    'image' => $block->hasMedia('featured') ? $block->getFirstMediaUrl('featured') : ''
                ];
            }
            Cache::put($cache_key, $content_block, Carbon::now()->addDay());
        }

        return $content_block;
    }
}

if (!function_exists('gallery')) {
    /**
     * Get gallery based on the gallery ID
     *
     * @param $gallery_id
     * @return array|null
     */
    function gallery($gallery_id): ?array
    {
        $gallery = (new \App\Models\Theme\Gallery())->find($gallery_id);

        if ($gallery) {

            $title = $gallery->title_fr;
            $content = $gallery->content_fr;

            if (app()->getLocale() === 'en') {

                $title = $gallery->title_en;
                $content = $gallery->content_en;
            }

            if (app()->getLocale() === 'nl') {

                $title = $gallery->title_nl;
                $content = $gallery->content_nl;
            }

            return [
                'id' => $gallery->id,
                'title' => $title,
                'content' => $content,
                'image' => $gallery->getMedia('gallery')
            ];
        }

        return null;
    }
}

if (!function_exists('slideshow')) {
    /**
     * Get content block HTML based on the content block ID
     *
     * @param $slideshow_id
     * @return array|null
     */
    function slideshow($slideshow_id): ?array
    {
        $slideshow = (new \App\Models\Theme\Slideshow())->find($slideshow_id);

        if ($slideshow) {
            $slides = [];
            if ($slideshow->hasMedia('slides')) {
                foreach ($slideshow->getMedia('slides') as $slide) {
                    $slides[] = [
                        'title' => $slide->getCustomProperty('title_' . app()->getLocale()),
                        'url' => $slide->getCustomProperty('url_' . app()->getLocale()),
                        'link_text' => $slide->getCustomProperty('link_text_' . app()->getLocale()),
                        'content' => $slide->getCustomProperty('content_' . app()->getLocale()),
                        'image' => $slide->getUrl()
                    ];
                }
            }
            return [
                'model' => $slideshow,
                'slides' => $slides
            ];
        }

        return null;
    }
}

if (!function_exists('setting')) {
    function value_store(string $key)
    {
        // get settings path
        $value_store = Valuestore::make(config('nova-settings-tool.path'));

        if ($value_store->has($key)) {
            return $value_store->get($key);
        }

        return false;
    }
}
