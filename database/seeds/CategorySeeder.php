<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'user_id'       => 1,
            'category_name' => 'หน้าหลัก',
            'link_page'     => env('APP_URL'),
        ]);
        Category::create([
            'user_id'       => 1,
            'category_name' => 'ภาควิชาคอมพิวเตอร์',
        ]);
        Category::create([
            'user_id'       => 1,
            'category_name' => 'หลักสูตร',
        ]);
        Category::create([
            'user_id'       => 1,
            'category_name' => 'ข่าวสาร',
        ]);
        Category::create([
            'user_id'       => 1,
            'category_name' => 'บุคลากร',
        ]);
        Category::create([
            'user_id'       => 1,
            'category_name' => 'ปฏิทินวิชาการ',
        ]);
        Category::create([
            'user_id'       => 1,
            'category_name' => 'ติดต่อ',
        ]);
        Category::create([
            'user_id'       => 1,
            'category_name' => 'บริการออนไลน์',
        ]);
    }
}
