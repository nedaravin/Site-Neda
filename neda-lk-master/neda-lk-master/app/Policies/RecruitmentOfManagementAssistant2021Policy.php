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
 * Class RecruitmentOfManagementAssistant2021Policy
 * @package App\Policies
 */
class RecruitmentOfManagementAssistant2021Policy
{
    use HandlesAuthorization,
        PolicySupport;

    /**
     * @var string
     */
    public $module = 'Recruitment Of Management Assistant 2021';

    /**
     * Determine whether the user can create administrators.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return $user->id === 1;
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
        return $user->id === 1;
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
