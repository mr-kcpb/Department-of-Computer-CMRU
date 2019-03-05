<?php

namespace App\Policies;

use App\Models\ActivityPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityPagePolicy
{
    
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the activity page.
     *
     * @param  \                 $user
     * @param  \App\ActivityPage $activityPage
     *
     * @return mixed
     */
    public function view($user, ActivityPage $activityPage)
    {
        return true;
    }
    
    /**
     * Determine whether the user can create activity pages.
     *
     * @param  \ $user
     *
     * @return mixed
     */
    public function create($user)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can update the activity page.
     *
     * @param  \                 $user
     * @param  \App\ActivityPage $activityPage
     *
     * @return mixed
     */
    public function update($user, ActivityPage $activityPage)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can delete the activity page.
     *
     * @param  \                 $user
     * @param  \App\ActivityPage $activityPage
     *
     * @return mixed
     */
    public function delete($user, ActivityPage $activityPage)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can restore the activity page.
     *
     * @param  \                 $user
     * @param  \App\ActivityPage $activityPage
     *
     * @return mixed
     */
    public function restore($user, ActivityPage $activityPage)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can permanently delete the activity page.
     *
     * @param  \                 $user
     * @param  \App\ActivityPage $activityPage
     *
     * @return mixed
     */
    public function forceDelete($user, ActivityPage $activityPage)
    {
        //
    }
}
