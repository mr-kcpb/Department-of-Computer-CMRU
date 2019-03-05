<?php

namespace App\Policies;

use App\Models\AnnouncePage;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnnouncePagePolicy
{
    
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the announce page.
     *
     * @param  \                 $user
     * @param  \App\AnnouncePage $announcePage
     *
     * @return mixed
     */
    public function view($user, AnnouncePage $announcePage)
    {
        return true;
    }
    
    /**
     * Determine whether the user can create announce pages.
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
     * Determine whether the user can update the announce page.
     *
     * @param  \                 $user
     * @param  \App\AnnouncePage $announcePage
     *
     * @return mixed
     */
    public function update($user, AnnouncePage $announcePage)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can delete the announce page.
     *
     * @param  \                 $user
     * @param  \App\AnnouncePage $announcePage
     *
     * @return mixed
     */
    public function delete($user, AnnouncePage $announcePage)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can restore the announce page.
     *
     * @param  \                 $user
     * @param  \App\AnnouncePage $announcePage
     *
     * @return mixed
     */
    public function restore($user, AnnouncePage $announcePage)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can permanently delete the announce page.
     *
     * @param  \                 $user
     * @param  \App\AnnouncePage $announcePage
     *
     * @return mixed
     */
    public function forceDelete($user, AnnouncePage $announcePage)
    {
        //
    }
}
