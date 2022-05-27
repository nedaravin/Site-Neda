<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class VideoPolicy
 * @package App\Policies
 */
class VideoPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Video';
}
