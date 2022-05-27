<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class EntrepreneurPolicy
 * @package App\Policies
 */
class EntrepreneurPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Entrepreneur';
}
