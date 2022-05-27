<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index(Request $request)
    {
       return view('careers.index');
    }
}
