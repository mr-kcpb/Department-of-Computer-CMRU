<?php

namespace App\Policies;

use App\Models\Page;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagePolicy
{
    
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the page.
     *
     * @param  \         $user
     * @param  \App\Page $page
     *
     * @return mixed
     */
    public function view($user, Page $page)
    {
        return true;
    }
    
    /**
     * Determine whether the user can create pages.
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
     * Determine whether the user can update the page.
     *
     * @param  \         $user
     * @param  \App\Page $page
     *
     * @return mixed
     */
    public function update($user, Page $page)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can delete the page.
     *
     * @param  \         $user
     * @param  \App\Page $page
     *
     * @return mixed
     */
    public function delete($user, Page $page)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can restore the page.
     *
     * @param  \         $user
     * @param  \App\Page $page
     *
     * @return mixed
     */
    public function restore($user, Page $page)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can permanently delete the page.
     *
     * @param  \         $user
     * @param  \App\Page $page
     *
     * @return mixed
     */
    public function forceDelete($user, Page $page)
    {
        //
    }
}
