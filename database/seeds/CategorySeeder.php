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
            'category_name' => 'หน้าหลัก',
            'link_page'     => env('APP_URL'),
        ]);
        Category::create([
            'category_name' => 'ภาควิชาคอมพิวเตอร์',
        ]);
        Category::create([
            'category_name' => 'หลักสูตร',
        ]);
        Category::create([
            'category_name' => 'ข่าวสาร',
            'link_page'     => env('APP_URL') . '/news',
        ]);
        Category::create([
            'category_name' => 'บุคลากร',
            'link_page'     => env('APP_URL') . '/personnel',
        ]);
        Category::create([
            'category_name' => 'ปฏิทินวิชาการ',
            'link_page'     => env('APP_URL') . '/calendar',
        ]);
        Category::create([
            'category_name' => 'ติดต่อ',
            'link_page'     => env('APP_URL') . '/contact',
        ]);
        Category::create([
            'category_name' => 'บริการออนไลน์',
        ]);
    }
}
