<?php
declare(strict_types=1);
/**
 * Copyright (c) 2020. CameraLK - Adlux Software (Pvt) Ltd
 */

namespace App\Policies;

use App\Models\Auth\User as User;
use Illuminate\Database\Eloquent\Model;

trait PolicySupport
{
    /**
     * Check if the user has the specific permission and return a boolean value
     * @param string $permission
     * @param $user
     * @param Model|null $model
     * @return bool
     */
    public function hasAccess(string $permission, $user, Model $model = null): bool
    {
        // check if the user is a super admin and give full access
        if ($user->id === 1) {
            return true;
        }

        // check if a permission is parsed and check if the user has the permission
        if ($permission && strlen($permission)) {

            // check if the user has the permission
            return $user->can($permission);
        }
        return false;
    }

    /**
     * Determine whether the user can view any administrators.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return $this->hasAccess($this->module . ' Module Access', $user);
    }

    /**
     * Determine whether the user can view the administrator.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function view(User $user, Model $model)
    {
        return $this->hasAccess('Read ' . $this->module, $user, $model);
    }

    /**
     * Determine whether the user can create administrators.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return $this->hasAccess('Create ' . $this->module, $user);
    }

    /**
     * Determine whether the user can update the administrator.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function update(User $user, Model $model)
    {
        return $this->hasAccess('Update ' . $this->module, $user, $model);
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
        return $this->hasAccess('Delete ' . $this->module, $user, $model);
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
        return $this->hasAccess('Restore ' . $this->module, $user, $model);
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
        return $this->hasAccess('Force Delete ' . $this->module, $user, $model);
    }
}
