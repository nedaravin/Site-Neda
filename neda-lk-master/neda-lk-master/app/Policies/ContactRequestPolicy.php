<?php

namespace App\Policies;

use App\Models\ContactRequest;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactRequestPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Contact Request';
}
