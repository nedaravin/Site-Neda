<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class EventPolicy
 * @package App\Policies
 */
class BusinessServiceTypePolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Business Service Type';
}
