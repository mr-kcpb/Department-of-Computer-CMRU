@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">

        <!-- Page heading two starts -->

        <div class="page-heading-two">
            <div class="container">
                <h2>ภาควิชาคอมพิวเตอร์</h2>
                <div class="breads">
                    ภาควิชาคอมพิวเตอร์ / <a href="{{ route('department.14') }}">หลักสูตรและแผนการเรียน</a>
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

                                <h3>หลักสูตรและแผนการเรียน</h3>

                                <h4>โครงสร้างหลักสูตร</h4>
                                <p>โครงสร้างหลักสูตร <span class="text-danger">ทุกรหัส+ทุกสาขา</span></p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/pagecurr/pagecurr.php" target="_blank">
                                        http://www.academic.cmru.ac.th/pagecurr/pagecurr.php
                                    </a>
                                </p>

                                <p>โครงสร้างหลักสูตร <span class="text-danger">แยกแต่ละสาขา</span></p>
                                <p>รหัส 53-54 คอมพิวเตอร์ศึกษา</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/curr/curr_cmru/index.php" target="_blank">
                                        http://www.academic.cmru.ac.th/curr/curr_cmru/index.php
                                    </a>
                                </p>
                                <p>รหัส 56 57 58 คอมพิวเตอร์ศึกษา</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/curr_cmru53/curr53/Education/201411261052168235ComputerEducation56.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/curr_cmru53/curr53/Education/201411261052168235ComputerEducation56.pdf
                                    </a>
                                </p>
                                <p>รหัส 53-57 วิทยาการคอมพิวเตอร์</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/curr_cmru53/curr53/Science/201411211154322756ComputerScience4y53.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/curr_cmru53/curr53/Science/201411211154322756ComputerScience4y53.pdf
                                    </a>
                                </p>
                                <p>รหัส 53-57 เทคโนโลยีสารสนเทศ</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/curr_cmru53/curr53/Science/201411211153327929InformationTechnology4y53.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/curr_cmru53/curr53/Science/201411211153327929InformationTechnology4y53.pdf
                                    </a>
                                </p>
                                <p>รหัส 53-57 การโปรแกรมและการรักษาความปลอดภัยบนเว็บ</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/curr_cmru53/curr53/Science/201411211148563874WebprogrammingandSecurity4y53.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/curr_cmru53/curr53/Science/201411211148563874WebprogrammingandSecurity4y53.pdf
                                    </a>
                                </p>
                                <p>รหัส 58-62 วิทยาการคอมพิวเตอร์</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/web_curr58/pdf2558/COMSCI58.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/web_curr58/pdf2558/COMSCI58.pdf
                                    </a>
                                </p>
                                <p>รหัส 58-62 เทคโนโลยีสารสนเทศ</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/web_curr58/pdf2558/IT58.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/web_curr58/pdf2558/IT58.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส 58-62 การโปรแกรมและการรักษาความปลอดภัยบนเว็บ
                                </p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/web_curr58/pdf2558/WEB58.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/web_curr58/pdf2558/WEB58.pdf
                                    </a>
                                </p>
                                <p><b>หมายเหตุ</b></p>
                                <p>1. ภาควิชาคอมพิวเตอร์ถือว่าเป็นหน้าที่ของนักศึกษาต้องศึกษาโครงสร้างหลักสูตรให้เข้าใจ เพื่อทราบถึงรายวิชาที่ต้องเรียน ได้แก่</p>
                                <p>- วิชาศึกษาทั่วไป 30 หน่วยกิต มีเงื่อนไขห้ามลงซ้ำกลุ่มในบางหมวด จะต้องไม่ซ้ำ</p>
                                <p>- วิชาพื้นฐานวิชาชีพ 9-12 หน่วยกิต ต้องลงเรียนทุกวิชา</p>
                                <p>- วิชาชีพบังคับ 45-51 หน่วยกิต ต้องลงเรียนทุกวิชา</p>
                                <p>- วิชาชีพเลือก 33 หน่วยกิต ให้เลือกเรียนตามแผนเสนอแนะ</p>
                                <p>(หากไม่ลงเรียนตามแผน และมีข้อผิดพลาด/ทำให้จบล่าช้า จะถือว่าเป็นความบกพร่องของนักศึกษาเอง)</p>
                                <p>2. ต้องอ่านภาคผนวก ดูชื่อรายวิชาที่มี prerequisite ต้องสอบผ่านจึงจะเรียนวิชาตัวต่อไปได้</p>
                                <p>
                                    - prerequisite ทุกหลักสูตร
                                    <a href="https://goo.gl/2wKJ83" target="_blank">https://goo.gl/2wKJ83</a>
                                </p>
                                <p>
                                    - prerequisite คพ รหัส 56-60 (หลักสูตรปรับปรุง 2556)
                                    <a href="https://goo.gl/xjVLDn" target="_blank">https://goo.gl/xjVLDn</a>
                                </p>
                                <p>
                                    - prerequisite วค ทส ปร รหัส 58-59 (หลักสูตรปรับปรุง 2558)
                                    <a href="https://goo.gl/2KyfKI" target="_blank">https://goo.gl/2KyfKI</a>
                                </p>
                                <p>
                                    - prerequisite วค ทส ปร รหัส 53-57 (หลักสูตรปรับปรุง 2553)
                                    <a href="https://goo.gl/R38GOI" target="_blank">https://goo.gl/R38GOI</a>
                                </p>
                                <p>(หากสอบไม่ผ่านจะคลิกลงทะเบียนวิชา ตัวต่อไปไม่ได้)</p>
                                <p>3. หากนักศึกษาไม่ศึกษาให้เข้าใจ ทำให้ดำเนินการไม่ถูกต้องตามโครงสร้างหลักสูตรและแผนการเรียนเสนอแนะ</p>
                                <p>ภาควิชาคอมพิวเตอร์จะถือว่าเป็นความรับผิดชอบของนักศึกษาเอง</p>
                                <p>4. นศ. **หลักสูตรเก่า** สามารถลงเรียนวิชาในหลักสูตรใหม่แล้วเทียบรายวิชาได้ ตูรายชื่อวิชาเทียบได้ที่ลิงค์</p>
                                <p><a href="http://www.academic.cmru.ac.th/cts/" target="_blank">http://www.academic.cmru.ac.th/cts/</a> (ดูหัวข้อ "ตารางเทียบ")</p>
                                <p>- นศ.หลักสูตรใหม่กว่า ห้ามลงรหัสวิชาหลักสูตรเก่า จะเทียบวิชาไม่ได้ !!!!</p>
                                <p>- วิชาที่ชื่อเหมือนกัน รหัสเดียวกัน แต่มีรหัสวิชาลงท้ายด้วย เลข 1,4</p>
                                <p>ได้แก่ COM xxxx1 และ COM xxxx4 นั้น 1, 4 จะเป็นตัวแยกหลักสูตร เก่า กับ ใหม่ เช่น</p>
                                <p>- COM 27011 ระบบคอมพิวเตอร์และสถาปัตยกรรม (หลักสูตร53 นศ.รหัส53-57)</p>
                                <p>- COM 27014 ระบบคอมพิวเตอร์และสถาปัตยกรรม (หลักสูตร58 นศ.รหัส58-59)</p>

                                <h4>คู่มือนักศึกษา</h4>
                                <p>ที่มา คู่มือนักศึกษา ทุกชั้นปี</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/
                                    </a>
                                </p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/manual_all.php" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/manual_all.php
                                    </a>
                                </p>
                                <p>
                                    รหัส60
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manua60.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manua60.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส59
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual59.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual59.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส58
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual58.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual58.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส57
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual57.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual57.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส56
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual56.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual56.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส55
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual55.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual55.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส54
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual54.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual54.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส53
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual53.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual53.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส52
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual52.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual52.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส51
                                    <a href="http://www.academic.cmru.ac.th/stdmanual/doc/manual51.pdf" target="_blank">
                                        http://www.academic.cmru.ac.th/stdmanual/doc/manual51.pdf
                                    </a>
                                </p>
                                <p>
                                    รหัส49
                                    <a href="http://www.academic.cmru.ac.th/casr/index.php?page=data6.php" target="_blank">
                                        http://www.academic.cmru.ac.th/casr/index.php?page=data6.php
                                    </a>
                                </p>
                                <p><b>หมายเหตุ</b></p>
 <p>
     - ภาควิชาคอมพิวเตอร์ถือว่าเป็นหน้าที่รับของนักศึกษาที่ต้องศึกษาคู่มือให้เข้าใจ เพื่อทราบถึงกฏระเบียบนักศึกษา วินัยนักศึกษา งานวิชาการ เช่น การยื่นเอกสาร รักษาสภาพ ยื่นขอเปิด เทียบโอน การพ้นสภาพ เกียรตินิยม ค่าธรรมเนียมศึกษา ในกรณีต่างๆ ฯลฯ ตามระบุในเล่ม และหากมีข้อสงสัยให้ปรึกษาอ.ที่ปรึกษา/สำนักทะเบียนฯ
 </p>
                                <p>
                                    - หากนักศึกษาไม่ศึกษาให้เข้าใจ ทำให้ดำเนินการไม่ถูกต้องตามระเบียบ มร.ชม. ทำให้สำเร็จการศึกษาล่าช้า ภาควิชาคอมพิวเตอร์จะถือว่าเป็นความรับผิดชอบของนักศึกษาเอง
                                </p>

                                <h4>แผนการเรียนเสนอแนะ</h4>
                                <p>ค้นหาแผนการเรียนเสนอแนะ <span class="text-danger">ทุกหลักสูตร</span> ในแต่ละปีรหัสนักศึกษา</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/plan_new/" target="_blank">
                                        http://www.academic.cmru.ac.th/plan_new/
                                    </a>
                                </p>

                                <p><b>หมายเหตุ</b></p>
                                <p>1. ภาควิชาคอมพิวเตอร์ถือว่าเป็นหน้าที่ของนักศึกษาต้องศึกษาโครงสร้างหลักสูตรให้เข้าใจ เพื่อทราบถึงรายวิชาที่ต้องเรียน ได้แก่</p>
                                <p>- วิชาศึกษาทั่วไป 30 หน่วยกิต มีเงื่อนไขห้ามลงซ้ำกลุ่มในบางหมวด จะต้องไม่ซ้ำ</p>
                                <p>- วิชาพื้นฐานวิชาชีพ 9-12 หน่วยกิต ต้องลงเรียนทุกวิชา</p>
                                <p>- วิชาชีพบังคับ 45-51 หน่วยกิต ต้องลงเรียนทุกวิชา</p>
                                <p>- วิชาชีพเลือก 33 หน่วยกิต ให้เลือกเรียนตามแผนเสนอแนะ</p>
                                <p>(หากไม่ลงเรียนตามแผน และมีข้อผิดพลาด/ทำให้จบล่าช้า จะถือว่าเป็นความบกพร่องของนักศึกษาเอง)</p>
                                <p>- ต้องอ่านภาคผนวก ดูชื่อรายวิชาที่มี prerequisite ต้องสอบผ่านจึงจะเรียนวิชาตัวต่อไปได้</p>
                                <p>(หากสอบไม่ผ่านจะคลิกลงทะเบียนวิชา ตัวต่อไปไม่ได้)</p>
                                <p>2. ดาวน์โหลด สรุป prerequisite ทุกหลักสูตรได้ที่ <a href="https://goo.gl/2wKJ83" target="_blank">https://goo.gl/2wKJ83</a></p>
                                <p>
                                    - prerequisite คพ รหัส 56-60 (หลักสูตรปรับปรุง 2556)
                                    <a href="https://goo.gl/xjVLDn" target="_blank">https://goo.gl/xjVLDn</a>
                                </p>
                                <p>
                                    - prerequisite วค ทส ปร รหัส 58-59 (หลักสูตรปรับปรุง 2558)
                                    <a href="https://goo.gl/2KyfKI" target="_blank">https://goo.gl/2KyfKI</a>
                                </p>
                                <p>
                                    - prerequisite วค ทส ปร รหัส 53-57 (หลักสูตรปรับปรุง 2553)
                                    <a href="https://goo.gl/R38GOI" target="_blank">https://goo.gl/R38GOI</a>
                                </p>
                                <p>3. หากนักศึกษาไม่ศึกษาให้เข้าใจ ทำให้ดำเนินการไม่ถูกต้องตามโครงสร้างหลักสูตรและแผนการเรียนเสนอแนะ</p>
                                <p>ภาควิชาคอมพิวเตอร์จะถือว่าเป็นความรับผิดชอบของนักศึกษาเอง</p>

                                <h4>เรียนอย่างไรให้จบใน 4 ปี</h4>
                                <p>1. ควรเรียนตามแผนการเรียนเสนอแนะ</p>
                                <p>• รายวิชาที่เสนอเปิดตามแผนการเรียนเสนอแนะ จะเปิดในแต่ละเทอมตามแผนเท่านั้น</p>
                                <p>• หากไม่ลงทะเบียนเรียนตามแผน บางรายวิชาจะเปิดสอนแค่ปีละ1ครั้ง ดังนั้น หากนศ.ไม่ลงเรียนในปีที่ระบุในแผน จะทำให้เรียนช้าไป 1เทอม-1ปี เป็นอย่างน้อย</p>
                                <p>• เพราะ บางวิชาเปิดแค่ปีละครั้ง พอไปลงปีการศึกษาถัดไป ก็อาจมีวันสอบหรือเวลาเรียนชนกัน ส่งผลทำให้ไม่สามารถเรียนจบใน ระยะเวลาที่กำหนดได้</p>
                                <p>• นศ.สามารถตรวจสอบเบื้องต้นว่าวิชาใดจะเปิดเทอมไหนได้จากแผนการเรียนเสนอแนะ</p>
                                <p>• หากหลักสูตรของตนเองไม่เปิด แต่หลักสูตรอื่นเปิดก็สามารถไปเรียนร่วมได้ (ทั้งนี้อาจมีการเปลี่ยนแปลง บางหลักสูตรบางปีก็ไม่มีรุ่นน้องทำให้วิชาไม่เปิดตามแผน ดังนั้นต้องตรวจสอบแต่ละเทอมอีกครั้ง)</p>
                                <p>2. กลุ่มวิชาเอกบังคับ ควรตั้งใจเรียนให้ผ่าน เพราะ</p>
                                <p>• ไม่สามารถเปลี่ยนวิชาได้</p>
                                <p>• บางวิชาจะเปิดในภาคเรียนที่ 2 เท่านั้น ทั้งภาคปกติและภาคพิเศษ</p>
                                <p>3. เว้นแต่จะมีเหตุจำเป็นสุดวิสัย เช่น ติด F / ยกเว้น / โอนหน่วยกิต</p>
                                <p>• วิชาเอกบังคับ สามารถไปเรียนกับหลักสูตรอื่น (วค ปร ทส คพ)</p>
                                <p>• วิชาเอกเลือก ปรับเปลี่ยนได้และสามารถไปเรียนในหลักสูตรอื่น (วค ปร ทส คพ)</p>
                                <p>• เรียนกับภาคพิเศษ หรือ รอเรียนในปีถัดไปกับนศ.รุ่นน้อง</p>
                                <p>• แต่อาจจะมีปัญหาวัน-เวลาสอบตรงกัน หรือบางปีไม่มีนศ.ภาคพิเศษ/ไม่มีนศ.รุ่นน้อง ก็จะไม่เปิดสอน</p>
                                <p>4. นศ.ที่ไม่ลงทะเบียนเรียนตามแผนจะต้องรับผิดชอบตนเอง หากไม่สามารถเรียนจบได้ภายในระยะเวลากำหนด 4 ปี</p>
                                <p>5. นศ.ที่เกรดมีปัญหา ใกล้จะรีไทร์ หรือสอบติด F หลายวิชา ให้มาติดต่ออาจารย์ที่ปรึกษา สม่ำเสมอ โดยเฉพาะในช่วงระยะเวลา ลงทะเบียน/add-drop</p> <p>เพื่อปรึกษา/ตรวจสอบ/วางแผนการเรียนเป็นรายบุคคล เพื่อให้สามารถจบได้ทันในระยะเวลากำหนด</p>
                                <p>6. ภายในชั้นปีที่ 3 นศ.ควรมีหัวข้อเอกเทศ และสอบบทที่ 1-3</p>
                                <p>7. ภายในชั้นปีที่ 4 นศ.ควรสอบเอกเทศบทที่ 4-5</p>
                                <p>• หากนศ.ลงทะเบียนไปแล้ว แต่มีเหตุสุดวิสัยยื่นสอบไม่ทัน ให้ DROP และไปลงทะเบียนภาคเรียนอื่นที่คิดว่าจะสอบได้ทัน จะได้ไม่ต้องติด F</p>


                                <h4>การพ้นสภาพ/รีไทร์</h4>
                                <p>การพ้นสภาพนักศึกษา (รีไทร์) ภาคปกติ (เทอม 1+2) ภาคพิเศษ (เทอม 1+2+3)</p>
                                <p>ปี 1 เกรดเฉลี่ยสะสม <span class="text-danger">ต่ำกว่า 1.5</span></p>
                                <p>ปี 2 เกรดเฉลี่ยสะสม <span class="text-danger">ต่ำกว่า 1.7</span></p>
                                <p>ปี 3 ขึ้นไป เกรดเฉลี่ยสะสม <span class="text-danger">ต่ำกว่า 1.8</span></p>
                                <p>• กรุณาสอบถามคะแนนเก็บจากอ.ผู้สอนทุกวิชาก่อนเกรดออก หากเกรดมีปัญหาจะรีไทร์ ให้ติดต่อขอคำแนะนำจาก อ.ที่ปรึกษา/ภาควิชา โดยทันที</p>
                                <p><b>หมายเหตุ</b> นศ.ที่ยื่นขอสำเร็จการศึกษา จะต้องมีเกรดเฉลี่ยสะสม 2.00 ขึ้นไป ถึงจะจบได้</p>

                                <p><b>ข้อควรปฏิบัติ</b></p>
                                <p>- ให้ตั้งใจอ่านหนังสือ ทำข้อสอบให้ดี หลังสอบเสร็จให้สอบถามคะแนนจากอาจารย์ผู้สอน เพราะหากเกรดออกไปแล้วได้คะแนนไม่ถึงเกณฑ์จะพ้นสภาพ (โดนรีไทร์)</p>
                                <p>- นศ.ควรลงทะเบียนเรียนตามแผนการเรียนเสนอแนะ เพราะหากไม่ลงทะเบียนตามแผนอาจมีปัญหาบางวิชาเปิด</p>
                                <p>แค่ปีละครั้ง พอไปลงปีการศึกษาถัดไป ก็อาจมีวันสอบหรือเวลาเรียนชนกัน ส่งผลทำให้ไม่สามารถเรียนจบในระยะเวลาที่กำหนดได้</p>
                                <p>- นศ.สามารถตรวจสอบว่าวิชาใดจะเปิดเทอมไหนจากแผนการเรียนเสนอแนะได้ที่ http://www.academic.cmru.ac.th/statstd/index.php</p>
                                <p>- หากหลักสูตรของตนเองไม่เปิด แต่หลักสูตรอื่นเปิดก็สามารถไปเรียนร่วมได้</p>
                                <p>- (ทั้งนี้อาจมีการเปลี่ยนแปลง ต้องตรวจสอบแต่ละเทอมอีกครั้ง)</p>

                                <h4>เรียนอย่างไร ไม่ให้โดนรีไทร์</h4>
                                <p>1. เข้าเรียนทุกครั้ง ส่งงานครบ ส่งงานให้ครบภายในระยะเวลากำหนด และไม่ลอกการบ้าน</p>
                                <p>• หากมีเหตุจำเป็นต้องขาดเรียน ให้แจ้งอาจารย์ และส่งงานภายในระยะเวลากำหนด หรือส่งล่วงหน้า</p>
                                <p>2. เรียนให้เข้าใจตั้งแต่ในห้องเรียน+ใช้เวลาในชั้นเรียนให้คุ้มค่า</p>
                                <p>• หากเรียนไม่ทัน/ไม่เข้าใจ ให้สอบถาม/แจ้งอ.ผู้สอน เพื่อขอแนะนำ หรือสอนเสริม อย่าสะสมไว้นานจนพอกพูน</p>
                                <p>3. รวมกลุ่มเข้าไว้ ช่วยกันเรียน/ทำงานกลุ่ม /ทบทวนบทเรียน</p>
                                <p>• วิชาใดเก่ง/ถนัด ก็สลับกันติว</p>
                                <p>• ส่วนคนที่มาขอให้เพื่อนติวให้ ก็ต้องมีน้ำใจเอื้อเฟื้อ ตอบแทนน้ำใจต่อผู้ที่ติวให้บ้าง เช่น สนับสนุนเสบียง สถานที่ อุปกรณ์ติว ฯลฯ</p>
                                <p>5. สอบถามรุ่นพี่ ว่ารายวิชาใดที่ยาก และขอตัวอย่างเอกสาร งานเก่าๆ ที่ทำส่งมาเป็นแนวทาง</p>
                                <p>6. ดูแลเกรดเฉลี่ย ภาคปกติ (เทอม 1+2) ภาคพิเศษ (เทอม 1+2+3)</p>
                                <p>• ปี 1 เกรดเฉลี่ยสะสม>= 1.5</p>
                                <p>• ปี 2 เกรดเฉลี่ยสะสม>= 1.7</p>
                                <p>• ปี 3 ขึ้นไป เกรดเฉลี่ยสะสม>= 1.8</p>
                                <p>• แต่ละวิชา ควรจะได้เกรด C ขึ้นไป+มีเกรด A, B เก็บไว้ให้ได้มากๆ เพราะถ้าปีสูงๆ โอกาสที่เกรดจะเพิ่มขึ้น จะยากมาก เพราะจำนวนวิชาที่นำมาคิดคำนวณจะมากตาม</p>
                                <p>7. การสอบ</p>
                                <p>• เตรียมพร้อมอ่านหนังสือสอบล่วงหน้า</p>
                                <p>• แบ่งเวลาในการสอบ+ทำข้อสอบให้ทัน เช่น ข้อสอบ 120 ข้อ (2 ชั่วโมง) ต้องทำให้ 60 ข้อ/ชั่วโมง</p>
                                <p>• ข้อสอบอัตนัยอย่าส่งกระดาษปล่าว ให้เขียนให้มากที่สุด เผื่อมีบางส่วนถูกต้องได้คะแนนบ้าง ก็ดีกว่าได้ศูนย์ 0</p>
                                <p>• ทำข้อสอบเสร็จ หากมีเวลาเหลือให้ทบทวนให้มั่นใจว่า ข้อที่ทำได้ จะต้องทำถูก</p>
                                <p>6. สอบถามคะแนนเก็บจากอ.ผู้สอน</p>
                                <p>• หากกลัวติด F ให้ ยกเลิกรายวิชา (Withdrawn) ก่อนหมดเขตถอนรายวิชา นศ.จะได้เกรด W ซึ่งไม่นำมาคิดเกรดเฉลี่ย * *</p>
                                <p>8. หากเกรดมีปัญหาจะรีไทร์ ให้ติดต่อขอคำแนะนำจาก อ.ที่ปรึกษา/ภาควิชา/สำนักทะเบียนและประมวลผล ด่วน</p>
                                <p>----------------------------------------</p>
                                <p>** น้ำหนักเกรด</p>
                                <p>A=4 | B+=3.5 | B=3 | C+=2.5 | C=2 | D=+1.5 | D=1 | F=0</p>
                                <p>** เกรดเฉลี่ย=ผลรวมน้ำหนักเกรด/จำนวนวิชา</p>
                                <p>----------------------------------------</p>
                                <p>** ตัวอย่างการคำนวณเกรดเฉลี่ย</p>
                                <p>เช่น ลงทะเบียนทั้งหมด 7 วิชา</p>
                                <p>----------------------------------------</p>
                                <p>ได้เกรด C=5 วิชา และ F=2 วิชา</p>
                                <p>เกรดเฉลี่ย=(2+2+2+2+2+0+0)/7 = 1.43 รีไทร์</p>
                                <p>----------------------------------------</p>
                                <p>ได้เกรด C+=1 วิชา C=4 วิชา และ F=2 วิชา</p>
                                <p>เกรดเฉลี่ย=(2.5+2+2+2+2+0+0)/7 = 1.5</p>
                                <p>----------------------------------------</p>
                                <p>ได้เกรด C=6 วิชา และ F=1 วิชา</p>
                                <p>เกรดเฉลี่ย=(2+2+2+2+2+2+0)/7 = 1.71</p>
                                <p>----------------------------------------</p>
                                <p>ได้เกรด B=1 C=5 วิชา และ F=1 วิชา</p>
                                <p>เกรดเฉลี่ย=(3+2+2+2+2+2+0)/7 = 1.86</p>
                                <p>----------------------------------------</p>
                                <p>ได้เกรด A=1 C=5 วิชา และ F=1 วิชา</p>
                                <p>เกรดเฉลี่ย=(4+2+2+2+2+2+0)/7 = 2.00</p>
                                <p>----------------------------------------</p>

                                <h4>วิชาบังคับก่อน (Prerequisite)</h4>
                                <p><b>วิชาบังคับก่อน (Prerequisite)</b></p>
                                <p>- นศ.ต้องสอบผ่าน วิชา Prerequisite จึงจะสามารคลิกลงทะเบียนเรียนวิชาตัวต่อไปได้ตามลำดับ (หากสอบวิชา Prerequisite ไม่ผ่านระบบลงทะเบียนจะล็อกลงทะเบียนวิชาตัวต่อไปไม่ได้ ทำให้สำเร็จการศึกษาล่าช้า)</p>
                                <p>- วิชา Prerequisite แต่ละหลักสูตรจะไม่เหมือนกันตรวจสอบได้ที่ <a
                                            href="https://goo.gl/2wKJ83" target="_blank">https://goo.gl/2wKJ83</a> ดังนี้</p>
                                <p>• คพ รหัส 56-60 (หลักสูตรปรับปรุง 2556)</p>
                                <p>• วค ทส ปร รหัส 58-59 (หลักสูตรปรับปรุง 2558)</p>
                                <p>• วค ทส ปร รหัส 53-57 (หลักสูตรปรับปรุง 2553)</p>
                                <p>- อ่านคำอธิบายรายวิชาที่มี Prerequisite ได้ที่ โครงสร้างหลักสูตร</p>
                                <p>
                                    <a href="http://www.computer.cmru.ac.th/index.php?name=main&file=show&id_detail=52" target="_blank">
                                        http://www.computer.cmru.ac.th/index.php?name=main&file=show&id_detail=52
                                    </a>
                                </p>

                                <embed src="http://www.computer.cmru.ac.th/file/Prerequisite%20v3%20%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A353%2053%2058.pdf" style="width: 100%; height: 600px" />

                                <h4>รายชื่ออาจารย์ที่ปรึกษาหมู่เรียน</h4>
                                <p>รายชื่ออาจารยที่ปรึกษาหมู่เรียน+ชื่อนักศึกษา+แผนการเรียนเสนอแนะ ทุกหลักสูตร ในแต่ละปีรหัสนักศึกษา</p>
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

                                <h4>รายชื่อนักศึกษา</h4>
                                <p>ค้นหา รายชื่อนักศึกษา แต่ละหลักสูตร</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/stdcode/index.php" target="_blank">
                                        http://www.academic.cmru.ac.th/stdcode/index.php
                                    </a>
                                </p>
                                <p>ค้นหา รายชื่อนักศึกษา ทุกหลักสูตร</p>
                                <p>
                                    <a href="http://www.academic.cmru.ac.th/statstd/index.php" target="_blank">
                                        http://www.academic.cmru.ac.th/statstd/index.php
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
