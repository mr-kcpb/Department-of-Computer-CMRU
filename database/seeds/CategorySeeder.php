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
        Categories::create([
            'user_id' => 1,
            'category_name' => 'ภาควิชาคอมพิวเตอร์'
        ]);
        Categories::create([
            'user_id' => 1,
            'category_name' => 'หลักสูตร'
        ]);
        Categories::create([
            'user_id' => 1,
            'category_name' => 'ข่าวสาร'
        ]);
        Categories::create([
            'user_id' => 1,
            'category_name' => 'บุคคลกร'
        ]);
        Categories::create([
            'user_id' => 1,
            'category_name' => 'ปฏิทินวิชาการ'
        ]);
        Categories::create([
            'user_id' => 1,
            'category_name' => 'ติดต่อ'
        ]);
        Categories::create([
            'user_id' => 1,
            'category_name' => 'บริการออนไลน์'
        ]);
    }
}
