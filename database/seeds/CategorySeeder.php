<?php

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create(['category_name' => 'ภาควิชาคอมพิวเตอร์']);
        Categories::create(['category_name' => 'หลักสูตร']);
        Categories::create(['category_name' => 'ข่าวสาร']);
        Categories::create(['category_name' => 'บุคคลกร']);
        Categories::create(['category_name' => 'ปฏิทินวิชาการ']);
        Categories::create(['category_name' => 'ติดต่อ']);
        Categories::create(['category_name' => 'บริการออนไลน์']);
    }
}
