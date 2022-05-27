<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use App\Models\Content\Event;
use App\Models\Content\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('news.index', [
            'national' => (new News())->where('type', 'national')->paginate(),
            'regional' => (new News())->where('type', 'regional')->paginate(),
            'other' => (new News())->where('type', 'other')->orWhere('type', null)->paginate(),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, string $language, string $slug)
    {
        $news = (new News())->where('slug_' . app()->getLocale(), $slug)->first();

        if($news){
            return view('news.show', [
                'model' => $news
            ]);
        }

        abort(404);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function national(Request $request)
    {
        return view('news.national', [
            'national' => (new News())->where('type', 'national')->paginate()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function regional(Request $request)
    {
        return view('news.regional', [
            'regional' => (new News())->where('type', 'regional')->paginate()
        ]);
    }
}
