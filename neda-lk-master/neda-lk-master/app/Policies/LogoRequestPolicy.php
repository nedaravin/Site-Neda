<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Policies;

use App\Models\Auth\User as User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogoRequestPolicy
 * @package App\Policies
 */
class LogoRequestPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Logo Requests';

    /**
     * Determine whether the user can delete the administrator.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function delete(User $user, Model $model)
    {
        return $user->id === 1;
    }

    /**
     * Determine whether the user can restore the administrator.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function restore(User $user, Model $model)
    {
        return $user->id === 1;
    }

    /**
     * Determine whether the user can permanently delete the administrator.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function forceDelete(User $user, Model $model)
    {
        return $user->id === 1;
    }
}
