<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use App\Models\Content\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * Page show
     *
     * @param Request $request
     * @param string $language
     * @param Page $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|View
     */
    public function show(Request $request, string $language, Page $page)
    {
        if ($page && $page->status) {

            return view('page.show', [
                'model' => $page
            ]);
        }

        abort(404);
    }
}
