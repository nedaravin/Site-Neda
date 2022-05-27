<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Policies;

use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContentBlockPolicy
 * @package App\Policies
 */
class ContentBlockPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Content Block';

    /**
     * Determine whether the user can delete the administrator.
     *
     * @param \App\Models\Auth\User $user
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
