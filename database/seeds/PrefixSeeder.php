<?php

use Illuminate\Database\Seeder;
use App\Models\Prefix;

class PrefixSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prefix::create(['prefix_name' => 'คุณ']);
        Prefix::create(['prefix_name' => 'อาจารย์']);
        Prefix::create(['prefix_name' => 'ผู้ช่วยศาสตราจารย์']);
    }
}
