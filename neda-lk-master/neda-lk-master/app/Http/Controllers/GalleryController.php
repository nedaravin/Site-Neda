<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use App\Models\Content\Gallery;
use App\Models\Content\Video;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class GalleryController
 * @package App\Http\Controllers
 */
class GalleryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $media = (new Media())
            ->where('collection_name', 'gallery')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('gallery.index', [
            'media' => $media
        ]);
    }

    public function event()
    {
        $gallery_event = (new Gallery())
            ->where('status', 1)
            ->where('category', 'event')
            ->get();
        return view('gallery.event', [
            'galleries' => $gallery_event
        ]);
    }

    public function education()
    {
        $gallery_education = (new Gallery())
            ->where('status', 1)
            ->where('category', 'education')
            ->get();
        return view('gallery.education', [
            'galleries' => $gallery_education
        ]);
    }

    public function general()
    {
        $gallery_general = (new Gallery())
            ->where('status', 1)
            ->where('category', 'general')
            ->get();
        return view('gallery.general', [
            'galleries' => $gallery_general
        ]);
    }

    public function other()
    {
        $gallery_other = (new Gallery())
            ->where('status', 1)
            ->where('category', 'other')
            ->get();
        return view('gallery.other', [
            'galleries' => $gallery_other
        ]);
    }
}
