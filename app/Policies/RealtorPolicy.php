<?php

namespace App\Policies;

use App\Models\Realtor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RealtorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Realtor $realtor)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Realtor $realtor)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Realtor $realtor)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Realtor $realtor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Realtor $realtor)
    {
        //
    }
}
