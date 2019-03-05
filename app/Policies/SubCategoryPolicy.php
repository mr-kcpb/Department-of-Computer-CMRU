<?php

namespace App\Policies;

use App\Models\SubCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubCategoryPolicy
{
    
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the sub category.
     *
     * @param  \                $user
     * @param  \App\SubCategory $subCategory
     *
     * @return mixed
     */
    public function view($user, SubCategory $subCategory)
    {
        return true;
    }
    
    /**
     * Determine whether the user can create sub categories.
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
     * Determine whether the user can update the sub category.
     *
     * @param  \                $user
     * @param  \App\SubCategory $subCategory
     *
     * @return mixed
     */
    public function update($user, SubCategory $subCategory)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can delete the sub category.
     *
     * @param  \                $user
     * @param  \App\SubCategory $subCategory
     *
     * @return mixed
     */
    public function delete($user, SubCategory $subCategory)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can restore the sub category.
     *
     * @param  \                $user
     * @param  \App\SubCategory $subCategory
     *
     * @return mixed
     */
    public function restore($user, SubCategory $subCategory)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can permanently delete the sub category.
     *
     * @param  \                $user
     * @param  \App\SubCategory $subCategory
     *
     * @return mixed
     */
    public function forceDelete($user, SubCategory $subCategory)
    {
        //
    }
}
