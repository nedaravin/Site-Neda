<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use App\Models\Content\Event;
use App\Models\Content\Gallery;
use App\Models\Content\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $gallery = null;
        if (Cache::has('gallery')) {
            $gallery = Cache::get('gallery');
        } else {
            $gallery = (new Media())
                ->where('collection_name', 'gallery')
                ->orderBy('created_at', 'DESC')
                ->where('model_id', '<>', 1)
                ->limit(15)
                ->get();
            Cache::put('gallery', $gallery, Carbon::now()->addDay());
        }

        $events = null;
        if (Cache::has('events')) {
            $events = Cache::get('events');
        } else {
            $events = (new Event())
                ->with('media')
                ->whereDate('event_start', '>=', Carbon::now())
                ->limit(2)
                ->orderBy('event_end', 'DESC')
                ->get();
            Cache::put('events', $events, Carbon::now()->addDay());
        }

        $home_gallery = null;
        if (Cache::has('home_gallery')) {
            $home_gallery = Cache::get('home_gallery');
        } else {
            $home_gallery = (new Gallery())
                ->with('media')
                ->where('id', 1)
                ->where('status', 1)
                ->first();
            Cache::put('home_gallery', $home_gallery, Carbon::now()->addDay());
        }

        $news = null;
        if (Cache::has('news')) {
            $news = Cache::get('news');
        } else {
            $news = (new News())
                ->with('media')
                ->limit(3)
                ->orderBy('created_at', 'DESC')
                ->get();
            Cache::put('news', $news, Carbon::now()->addDay());
        }

        return view('home', [
            'gallery' => $gallery,
            'events' => $events,
            'news' => $news,
            'home_gallery' => $home_gallery
        ]);
    }
}
