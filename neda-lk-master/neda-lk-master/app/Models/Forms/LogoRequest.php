<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

/**
 * Class LogoRequest
 * @package App\Models\Forms
 */
class LogoRequest extends Model
{
    use SoftDeletes, Actionable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'business_name',
        'business_registration_number',
        'type_of_products_or_services',
        'business_address',
    ];
}
