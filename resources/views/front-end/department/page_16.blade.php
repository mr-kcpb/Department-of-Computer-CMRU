@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">

        <!-- Page heading two starts -->

        <div class="page-heading-two">
            <div class="container">
                <h2>ภาควิชาคอมพิวเตอร์</h2>
                <div class="breads">
                    ภาควิชาคอมพิวเตอร์ / <a href="{{ route('department.16') }}">อาจารย์ประจำภาควิชา</a>
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

                                <h3>อาจารย์ประจำภาควิชา</h3>

                                <h4>รายชื่ออาจารย์</h4>
                                <p>รายชื่ออาจารย์ที่ปรึกษาหมู่เรียน</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/statstd/index.php" target="_blank">
                                        http://www.academic.cmru.ac.th/statstd/index.php
                                    </a>
                                </p>
                                <p>รายชื่ออาจารย์และหมายเลขห้องพักอาจารย์</p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/index.php?name=main&file=show&id_detail=2" target="_blank">
                                        http://www.computer.cmru.ac.th/index.php?name=main&file=show&id_detail=2
                                    </a>
                                </p>
                                <p>ตารางสอนอาจารย์และ Office Hour</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/teachersch/" target="_blank">
                                        http://www.academic.cmru.ac.th/teachersch/
                                    </a>
                                </p>

                                <h4>แนวปฏิบัติในการพบอาจารย์</h4>
                                <p>นักศึกษาที่ปรึกษา นักศึกษาในวิชาเรียน นักศึกษาเอกเทศ ฯลฯ ที่ต้องการขอคำแนะนำ ปรึกษาวิชาการ/ทั่วไป</p>
                                <p>สามารถติดต่ออาจารย์ได้ ดังนี้</p>
                                <p>1. ติดต่อด้วยตนเอง ที่ห้องพักอาจารย์ 221, 223, 262, 264, ห้องสอน</p>
                                <p>• แต่งกายชุดนักศึกษาตามระเบียบมร.ชม. หรือแต่งกายสุภาพ</p>
                                <p>• นัดหมายล่วงหน้า/ตรวจสอบตารางสอน+เวลาว่างของอาจารย์ จะได้ไม่เสียเวลา หากมาแล้วไม่พบอาจารย์</p>
                                <p>• หากมีเหตุจำเป็น เร่งด่วนสามารถไปรอที่ห้องสอนเพื่อพบอาจารย์หลังจากสอนเสร็จ</p>
                                <p>• ค้นหามายเลขห้องพักอาจารย์</p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/index.php?name=main&file=show&id_detail=2" target="_blank">
                                        http://www.computer.cmru.ac.th/index.php?name=main&file=show&id_detail=2
                                    </a>
                                </p>
                                <p>• ตารางสอนอาจารย์ และ Office Hours สำหรับให้คำปรึกษา</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/teachersch/" target="_blank">
                                        http://www.academic.cmru.ac.th/teachersch/
                                    </a>
                                </p>
                                <p>2. ติดต่อทาง Facebook หากมีเรื่องไม่เร่งด่วน</p>
                                <p>• ฝากข้อความทาง Inbox Facebook</p>
                                <p class="text-danger">(หลีกเลี่ยงการติดต่อทาง Comment โพสต์ เพราะอ.ไม่สามารถตามอัพเดทอ่านทุกโพสต์/ทุกกลุ่มได้ทั่วถึงทั้งหมด)</p>
                                <p>• พิมพ์แจ้ง ชื่อสกุล+รหัสนักศึกษา/ชั้นปี+สาขาวิชา+เรื่องที่ต้องการติดต่อ  (อาจารย์จะได้ทราบว่าเป็นใคร)</p>
                                <p>• ใช้ข้อความสุภาพ ถูกต้องตามหลักภาษาไทย งดใช้ภาษาวิบัติ</p>
                                <p>• หากไม่ตอบภายใน 1 สัปดาห์แสดงว่ามีภารกิจมาก ให้ติดต่อทางอื่น</p>
                                <p class="text-danger">3. ติดต่อทางโทรศัพท์ หากมีเรื่องจำเป็น/เร่งด่วน ที่ไม่สามารถรอได้</p>
                                <p>• จดเบอร์โทรได้ที่ห้องพักอาจารย์ทุกห้อง</p>
                                <p>• ใช้วาจาสุภาพ และแจ้ง ชื่อสกุล+รหัสนักศึกษา/ชั้นปี+สาขาวิชา+เรื่องที่ต้องการติดต่อ (อาจารย์จะได้ทราบว่าเป็นใคร)</p>
                                <p>• โทรมาในเวลาที่เหมาะสม/ถูกกาละเทศะ/ในเวลาราชการ/เวลาว่างที่อ.ไม่มีสอน</p>

                            </div>
                        </div>
                        <!-- Blog item ends -->


                    </div>
                </div>

            </div>
        </div>

@endsection
