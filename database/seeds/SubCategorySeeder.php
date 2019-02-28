<?php

use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Category 1 */
        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'ประวัติภาควิชาคอมพิวเตอร์',
            'sort' => 1
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'บุคลากรภาควิชาคอมพิวเตอร์',
            'sort' => 2
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'หลักสูตรภาควิชาคอมพิวเตอร์',
            'sort' => 3
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'ปรัชญา วิสัยทัศน์ พันธกิจ',
            'sort' => 4
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'คณะกรรมการภาควิชาคอมพิวเตอร์',
            'sort' => 5
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'ความภูมิใจของภาควิชาฯ',
            'sort' => 6
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'มคอ.',
            'sort' => 7
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'งานประกันคุณภาพ',
            'sort' => 8
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'จรรยาบรรณบุคลากรมหาวิทยาลัย',
            'sort' => 9
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'คุณสมบัติบัณฑิตที่พึงประสงค์',
            'sort' => 10
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'คุณธรรม จริยธรรม สำหรับนักศึกษา',
            'sort' => 11
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'การศึกษาอิสระด้านคอมพิวเตอร์',
            'sort' => 12
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'โครงการ/กิจกรรมภาควิชา',
            'sort' => 13
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'หลักสูตรและแผนการเรียน',
            'sort' => 14
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'ระเบียบปฏิบัติ งานทะเบียน วิชาการ',
            'sort' => 15
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'อาจารย์ประจำภาควิชา',
            'sort' => 16
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'Facebook Fanpage และ Group',
            'sort' => 17
        ]);

        SubCategory::create([
            'category_id' => 1,
            'sub_category_name' => 'ติอต่อภาควิชาคอมพิวเตอร์',
            'sort' => 18
        ]);
        /* Category 7 */
        SubCategory::create([
            'category_id' => 7,
            'sub_category_name' => 'เว็บหลักราชภัฏเชียงใหม่',
            'sort' => 1
        ]);

        SubCategory::create([
            'category_id' => 7,
            'sub_category_name' => 'คณะวิทยาศาสตร์และเทคโนโลยี',
            'sort' => 2
        ]);

        SubCategory::create([
            'category_id' => 7,
            'sub_category_name' => 'สำนักส่งเสริมวิชาการ',
            'sort' => 3
        ]);

        SubCategory::create([
            'category_id' => 7,
            'sub_category_name' => 'การศึกษาอิสระ สาขาคอมพิวเตอร์',
            'sort' => 4
        ]);
    }
}
