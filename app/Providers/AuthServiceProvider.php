<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies
        = [
            'App\Models\User'         => 'App\Policies\UserPolicy',
            'App\Models\Category'     => 'App\Policies\CategoryPolicy',
            'App\Models\SubCategory'  => 'App\Policies\SubCategoryPolicy',
            'App\Models\ActivityPage' => 'App\Policies\ActivityPagePolicy',
            'App\Models\AnnouncePage' => 'App\Policies\AnnouncePagePolicy',
            'App\Models\Calendar'     => 'App\Policies\CalendarPolicy',
            'App\Models\Page'         => 'App\Policies\PagePolicy',
        ];
    
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        //
    }
}
