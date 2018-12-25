<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(PrefixSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
