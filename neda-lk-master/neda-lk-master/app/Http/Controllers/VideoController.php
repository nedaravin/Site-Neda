<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use App\Models\Content\Video;

/**
 * Class VideoController
 * @package App\Http\Controllers
 */
class VideoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $videos_education = (new Video())
            ->where('status', 1)
            ->where('category', 'education')
            ->get();

        $videos_general = (new Video())
            ->where('status', 1)
            ->where('category', 'general')
            ->get();

        $videos_event = (new Video())
            ->where('status', 1)
            ->where('category', 'event')
            ->get();

        $videos_other = (new Video())
            ->where('status', 1)
            ->where('category', 'other')
            ->get();

        return view('video.index', [
            'videos_education' => $videos_education,
            'videos_general' => $videos_general,
            'videos_event' => $videos_event,
            'videos_other' => $videos_other,
        ]);
    }
}
