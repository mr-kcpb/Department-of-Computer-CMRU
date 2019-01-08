<?php

use Illuminate\Database\Seeder;
use App\Models\Prefixes;

class PrefixSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prefixes::create(['prefix_name' => 'คุณ']);
        Prefixes::create(['prefix_name' => 'อาจารย์']);
        Prefixes::create(['prefix_name' => 'ผู้ช่วยศาสตราจารย์']);
    }
}
