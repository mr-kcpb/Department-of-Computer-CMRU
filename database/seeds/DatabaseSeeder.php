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
        $this->call(PrefixSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(PageSeeder::class);
        $this->call(ContactSeeder::class);
        factory(App\Models\ActivityPage::class, 30)->create();
        factory(App\Models\AnnouncePage::class, 30)->create();
    }
}
