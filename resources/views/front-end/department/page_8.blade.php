@extends('layouts.app')
@section('content')

    <div class="main-block">

        <!-- Page heading two starts -->

        <div class="page-heading-two">
            <div class="container">
                <h2>ภาควิชาคอมพิวเตอร์</h2>
                <div class="breads">
                    ภาควิชาคอมพิวเตอร์ / <a href="{{ route('department.8') }}">งานประกันคุณภาพ</a>
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

                                <h3>งานประกันคุณภาพ</h3>

                                <h4>รายงานการประเมินตนเอง</h4>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/sar/sar54" target="_blank">
                                        รายงานการประเมินตนเอง SAR ปีการศึกษา 2554 (ข้อมูลใน Folder SAR54)
                                    </a>
                                </p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/sar55/" target="_blank">
                                        รายงานการประเมินตนเอง SAR ปีการศึกษา 2555 (ข้อมูลใน Folder SAR55)
                                    </a>
                                </p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/SAR56" target="_blank">
                                        รายงานการประเมินตนเอง SAR ปีการศึกษา 2556 (ข้อมูลใน Folder SAR56)
                                    </a>
                                </p>

                                <h4>คู่มือการประกันคุณภาพการศึกษา</h4>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/sar/manual55" target="_blank">
                                        คู่มือการประกันคุณภาพการศึกษา ปีการศึกษา 2555
                                    </a>
                                </p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%A1%E0%B8%B7%E0%B8%AD56" target="_blank">
                                        คู่มือการประกันคุณภาพการศึกษา ปีการศึกษา 2556
                                    </a>
                                </p>

                                <h4>ประกันคุณภาพการศึกษาระดับคณะ</h4>
                                <p>
                                    <a href="http://www.science.cmru.ac.th/qa/">
                                        ประกันคุณภาพการศึกษาระดับคณะ
                                    </a>
                                </p>

                                <h4>มคอ.3</h4>
                                <p>กรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ</p>
                                <p>มคอ.3 การพัฒนารายละเอียดของรายวิชา</p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/%E0%B8%A1%E0%B8%84%E0%B8%AD3%20IT.rar" target="_blank">
                                        หลักสูตรเทคโนโลยีสารสนเทศ
                                    </a>
                                </p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/%E0%B8%A1%E0%B8%84%E0%B8%AD3%20web.rar" target="_blank">
                                        หลักสูตรการโปรแกรมและการรักษาความปลอดภัยบนเว็บ
                                    </a>
                                </p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/%E0%B8%A1%E0%B8%84%E0%B8%AD3%20%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%AD%E0%B8%A1%2054_80_15.rar" target="_blank">
                                        หลักสูตรวิทยาการคอมพิวเตอร์
                                    </a>
                                </p>

                                <h4>แผนการดำเนินงานประกันคุณภาพ</h4>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/pancom.pdf">
                                        แผนการดำเนินงานประกันคุณภาพ
                                    </a>
                                </p>

                                <h4>ระบบกลไกประกันคุณภาพการศึกษา</h4>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%81%E0%B8%A5%E0%B9%84%E0%B8%81%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81_%E0%B8%99%E0%B8%84_%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A8_%E0%B8%81%E0%B8%A9%E0%B8%B2%20%E0%B8%A0%E0%B8%B2%E0%B8%84%E0%B8%A7_%E0%B8%8A%E0%B8%B2%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E_%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3_.pdf" target="_blank">
                                        ระบบและกลไกประกันคุณภาพการศึกษา
                                    </a>
                                </p>

                                <h4>นโยบายประกันคุณภาพการศึกษา</h4>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/%E0%B8%99%E0%B9%82%E0%B8%A2%E0%B8%9A%E0%B8%B2%E0%B8%A2%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81_%E0%B8%99%E0%B8%84_%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%A8_%E0%B8%81%E0%B8%A9%E0%B8%B2%20%E0%B8%A0%E0%B8%B2%E0%B8%84%E0%B8%A7_%E0%B8%8A%E0%B8%B2%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E_%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3_.pdf" target="_blank">
                                        นโยบายประกันคุณภาพการศึกษา
                                    </a>
                                </p>

                                <h4>ปฏิทินการดำเนินงานประกันคุณภาพ</h4>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/file/%E0%B8%9B%E0%B8%8F_%E0%B8%97_%E0%B8%99%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%94%E0%B8%B3%E0%B9%80%E0%B8%99_%E0%B8%99%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81_%E0%B8%99%E0%B8%84_%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%A0%E0%B8%B2%E0%B8%84%E0%B8%A7_%E0%B8%8A%E0%B8%B2%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E_%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3_.pdf" target="_blank">
                                        ปฏิทินการดำเนินงานประกันคุณภาพ
                                    </a>
                                </p>

                            </div>
                        </div>
                        <!-- Blog item ends -->


                    </div>
                </div>

            </div>
        </div>

@endsection