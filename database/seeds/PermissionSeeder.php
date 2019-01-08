<?php

use Illuminate\Database\Seeder;
use App\Models\Permissions;

class PermissionSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permissions::create(['permission_name' => 'Root']);
        Permissions::create(['permission_name' => 'Administrator']);
        Permissions::create(['permission_name' => 'Moderator']);
        Permissions::create(['permission_name' => 'User']);
    }
}
