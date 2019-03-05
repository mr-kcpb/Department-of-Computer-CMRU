<?php

namespace App\Policies;

use App\Models\Calendar;
use Illuminate\Auth\Access\HandlesAuthorization;

class CalendarPolicy
{
    
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the calendar.
     *
     * @param  \             $user
     * @param  \App\Calendar $calendar
     *
     * @return mixed
     */
    public function view($user, Calendar $calendar)
    {
        return true;
    }
    
    /**
     * Determine whether the user can create calendars.
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
     * Determine whether the user can update the calendar.
     *
     * @param  \             $user
     * @param  \App\Calendar $calendar
     *
     * @return mixed
     */
    public function update($user, Calendar $calendar)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can delete the calendar.
     *
     * @param  \             $user
     * @param  \App\Calendar $calendar
     *
     * @return mixed
     */
    public function delete($user, Calendar $calendar)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can restore the calendar.
     *
     * @param  \             $user
     * @param  \App\Calendar $calendar
     *
     * @return mixed
     */
    public function restore($user, Calendar $calendar)
    {
        return $user->edit_content == 1;
    }
    
    /**
     * Determine whether the user can permanently delete the calendar.
     *
     * @param  \             $user
     * @param  \App\Calendar $calendar
     *
     * @return mixed
     */
    public function forceDelete($user, Calendar $calendar)
    {
        //
    }
}
