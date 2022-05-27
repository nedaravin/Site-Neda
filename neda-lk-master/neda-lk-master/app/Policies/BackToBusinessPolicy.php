<?php

namespace App\Policies;

use App\Models\Forms\BackToBusiness;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BackToBusinessPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Back To Business';
}
