<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    
    
    
    /**
     * Determine whether the user can view the model.
     *
     * @param  \  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view( $user, User $model)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \  $user
     * @return mixed
     */
    public function create( $user)
    {
        return $user->edit_content == 1;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update( $user, User $model)
    {
        return $user->edit_content == 1 && $model->root_status != $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete( $user, User $model)
    {
        return $user->edit_content == 1 && $model->root_status != $user->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore( $user, User $model)
    {
        return $user->edit_content == 1;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function forceDelete( $user, User $model)
    {
        //
    }
}
