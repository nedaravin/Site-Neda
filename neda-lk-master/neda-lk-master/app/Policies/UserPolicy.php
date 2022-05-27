<?php
declare(strict_types=1);
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

namespace App\Policies;

use App\Models\Auth\User as User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPolicy
 * @package App\Policies
 */
class UserPolicy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'User';

    /**
     * Determine whether the user can update the administrator.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function update(User $user, Model $model)
    {

        if ($model->id == 1 && $user->id !== $model->id) {
            return false;
        }

        if ($user->hasRole('Site Administrator')) {
            return true;
        }

        return $model->id == $user->id && $this->hasAccess('Update ' . $this->module, $user, $model);
    }

    /**
     * Determine whether the user can delete the administrator.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function delete(User $user, Model $model)
    {
        if ($model->id == 1) {
            return false;
        }

        if ($user->hasRole('Site Administrator')) {
            return true;
        }

        return $model->id == $user->id && $this->hasAccess('Delete ' . $this->module, $user, $model);
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
        if ($model->id == 1) {
            return false;
        }

        if ($user->hasRole('Super Administrator')) {
            return true;
        }

        return $model->id == $user->id && $this->hasAccess('Force Delete ' . $this->module, $user, $model);
    }
}
