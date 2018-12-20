@extends('layouts.app')
@section('content')

    <div class="main-block">

        <!-- Page heading two starts -->

        <div class="page-heading-two">
            <div class="container">
                <h2>ภาควิชาคอมพิวเตอร์</h2>
                <div class="breads">
                    ภาควิชาคอมพิวเตอร์ / <a href="{{ route('department.1') }}">ประวัติภาควิชาคอมพิวเตอร์</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Page heading two ends -->

        <div class="container" style="min-height: 100vh">

            <!-- blog three -->
            <div class="blog-three">
                <div class="row">
                    <!-- Mainbar column -->
                    <div class="col-md-12">

                        <!-- Blog item starts -->
                        <div class="blog-three-item">

                            <!-- blog three Content -->
                            <div class="blog-three-content">
                                <!-- Heading -->
                                <h3>ประวัติภาควิชาคอมพิวเตอร์</h3>
                                <p>
                                    <span class="tab"></span>
                                    สาขาวิชาคอมพิวเตอร์ ภาควิชาวิทยาศาสตร์ประยุกต์ คณะวิทยาศาสตร์และเทคโนโลยี
                                    มหาวิทยาลัยราชภัฏเชียงใหม่ ปัจจุบันตั้งอยู่ที่ชั้น 2 และชั้น 6 อาคาร 2
                                    ของวิทยาเขตเวียงบัว รับผิดชอบจัดการเรียนการสอนหลักสูตรวิทยาศาสตรบัณฑิต 3 หลักสูตร
                                    คือ
                                    หลักสูตรวิทยาการคอมพิวเตอร์ หลักสูตรเทคโนโลยีสารสนเทศ
                                    และหลักสูตรการโปรแกรมและรักษาความปลอดภัยบนเว็บ มีคณาจารย์ในสังกัดจำนวนทั้งสิ้น 26
                                    ท่าน นักวิชาการ 2 ท่าน
                                </p>

                                <h5>1.การก่อตั้งโปรแกรมวิชาคอมพิวเตอร์ (พ.ศ. 2525-2548)</h5>
                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2525</b> อาจารย์พิชัย ระบอบ อาจารย์ประจำภาควิชาฟิสิกส์
                                    ได้จัดหาเครื่องไมโครคอมพิวเตอร์มาใช้เพื่อการเรียนการสอน
                                    โดยเริ่มจาการจัดอบรมให้แก่บุคคลภายนอก และใช้สถานที่ของภาควิชาฟิสิกส์
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2527</b> เปิดสอนหลักสูตรอนุปริญญาคอมพิวเตอร์
                                    และสอนบางรายวิชาที่เกี่ยวข้องกับการใช้งานคอมพิวเตอร์ให้กับภาควิชาต่างๆ
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2528</b> อาจารย์ประสิทธิ์ กิจจนศิริ อาจารย์ประจำภาควิชาคณิตศาสตร์
                                    ได้จัดตั้งภาควิชาคอมพิวเตอร์ พร้องทั้งเริ่มพัฒนาหลักสูตรครุศาสตรบัณฑิต
                                    สาขาวิชาคอมพิวเตอร์ศึกษา
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2529</b> ภาควิชาคอมพิวเตอร์เปิดสอนหลักสูตรครุศาสตรบัณฑิต
                                    สาขาวิชาคอมพิวเตอร์ศึกษา
                                    สถานที่ที่ใช้เป็นสำนักงานภาควิชา และจัดการเรียนการสอนในช่วงเริ่มต้น คือ อาคาร 1 ห้อง
                                    145
                                    โดยมีอาจารย์ประจำภาควิชาทั้งหมด 3 ท่าน และเนื่องจากจำนวนอาจารย์ยังมีน้อย
                                    ดังนั้นจึงเปิดรับนักศึกษาแบบปีเว้นปี
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2532</b> เมื่อมีจำนวนอาจารย์ประจำภาควิชาเพิ่มมากขึ้น
                                    ทั้งจากการรับบรรจุข้าราชการ
                                    และรับโอนย้ายจากส่วนราชการอื่น จึงเริ่มพัฒนาหลักสูตรวิทยาศาสตรบัณฑิต
                                    สาขาวิชาวิทยาการคอมพิวเตอร์ขึ้น
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2534</b> เปิดหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์
                                    พร้อมทั้งย้ายสำนักงานจากอาคาร 1 ห้อง 145 มาอยู่ที่อาคาร 2 ชั้น 2
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ. 2542</b> มีการปรับเปลี่ยนโครงสร้างการบริหารจากการบริหารในรูปแบบภาควิชา
                                    ไปเป็นการบริหารในรูปแบบโปรแกรมวิชา และผลจากการต่อเติมอาคาร 2 (จากเดิม 4 ชั้น
                                    เพิ่มเป็น 6
                                    ชั้น) โปรแกรมวิชาคอมพิวเตอร์ได้ขยายพื้นที่ในการจัดการเรียนการสอนไปยังชั้น 6
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2546</b> เริ่มพัฒนาหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2547</b> โปรแกรมวิชาคอมพิวเตอร์เปิดสอนหลักสูตรวิทยาศาสตรบัณฑิต
                                    สาขาวิชาเทคโนโลยีสารสนเทศ
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2549</b> เริ่มพัฒนาหลักสูตรวิทยาศาสตรบัณฑิต
                                    สาขาวิชาการโปรแกรมและรักษาความปลอดภัยบนเว็บ
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2550</b> มีการปรับเปลี่ยนโครงสร้างการบริหาร โดยโปรแกรมวิชาคอมพิวเตอร์
                                    เปลี่ยนเป็น
                                    สาขาวิชาคอมพิวเตอร์ ซึ่งเป็นสาขาวิชาในสังกัดภาควิชาวิทยาศาสตร์ประยุกต์
                                    คณะวิทยาศาสตร์และเทคโนโลยี พร้อมทั้งได้เปิดสอนหลักสูตรวิทยาศาสตรบัณฑิต
                                    สาขาวิชาการโปรแกรมและรักษาความปลอดภัยบนเว็บ
                                </p>

                                <p>
                                    <span class="tab"></span>
                                    <b>พ.ศ.2558</b> มีการปรับเปลี่ยนโครงสร้างการบริหาร โดยสาขาวิชาคอมพิวเตอร์
                                    เปลี่ยนเป็น
                                    ภาควิชาคอมพิวเตอร์ ในสังกัดคณะวิทยาศาสตร์และเทคโนโลยี
                                </p>
                            </div>
                        </div>
                        <!-- Blog item ends -->


                    </div>
                </div>

            </div>
        </div>

@endsection