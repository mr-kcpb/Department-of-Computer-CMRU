<div class="header-2">

    <!-- Container -->
    <div class="container" style="padding: 0">
        <div class="row">
            <div class="col-md-2" id="navbar-logo" style="display: none">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="http://www.computer.cmru.ac.th/images/logo.png" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-md-10">

                <!-- Navigation starts.  -->
                {{--<div class="navy">--}}
                {{--<ul>--}}
                {{--<li><a href="{{ route('home') }}">หน้าหลัก</a></li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0);">ภาควิชาคอมพิวเตอร์</a>--}}
                {{--<!-- Submenu -->--}}
                {{--<ul>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.1') }}" style="width: 310px">--}}
                {{--ประวัติภาควิชาคอมพิวเตอร์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.2') }}" style="width: 310px">--}}
                {{--บุคลากรภาควิชาคอมพิวเตอร์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.3') }}" style="width: 310px">--}}
                {{--หลักสูตรภาควิชาคอมพิวเตอร์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.4') }}" style="width: 310px">--}}
                {{--ปรัชญา วิสัยทัศน์ พันธกิจ--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.5') }}" style="width: 310px">--}}
                {{--คณะกรรมการภาควิชาคอมพิวเตอร์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.6') }}" style="width: 310px">--}}
                {{--ความภูมิใจของภาควิชาฯ--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.7') }}" style="width: 310px">--}}
                {{--มคอ.--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.8') }}" style="width: 310px">--}}
                {{--งานประกันคุณภาพ--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.9') }}" style="width: 310px">--}}
                {{--จรรยาบรรณบุคลากรมหาวิทยาลัย--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.10') }}" style="width: 310px">--}}
                {{--คุณสมบัติบัณฑิตที่พึงประสงค์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.11') }}" style="width: 310px">--}}
                {{--คุณธรรม จริยธรรม สำหรับนักศึกษา--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.12') }}" style="width: 310px">--}}
                {{--การศึกษาอิสระด้านคอมพิวเตอร์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.13') }}" style="width: 310px">--}}
                {{--โครงการ/กิจกรรมภาควิชา--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.14') }}" style="width: 310px">--}}
                {{--หลักสูตรและแผนการเรียน--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.15') }}" style="width: 310px">--}}
                {{--ระเบียบปฏิบัติ งานทะเบียน วิชาการ--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.16') }}" style="width: 310px">--}}
                {{--อาจารย์ประจำภาควิชา--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.17') }}" style="width: 310px">--}}
                {{--Facebook Fanpage และ Group--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.18') }}" style="width: 310px">--}}
                {{--ติอต่อภาควิชาคอมพิวเตอร์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="{{ route('department.3') }}">หลักสูตร</a></li>--}}
                {{--<li><a href="#">ข่าวสาร</a></li>--}}
                {{--<li><a href="{{ route('personnel') }}">บุคลากร</a></li>--}}
                {{--<li><a href="http://www.academic.cmru.ac.th/pdf/2557/calendar57_07042558144939.pdf"--}}
                {{--target="_blank">ปฏิทินวิชาการ</a></li>--}}
                {{--<li><a href="{{ route('department.18') }}">ติดต่อ</a></li>--}}
                {{--<li>--}}
                {{--<a href="#">บริการออนไลน์</a>--}}
                {{--<!-- Submenu -->--}}
                {{--<ul>--}}
                {{--<li>--}}
                {{--<a href="http://www.cmru.ac.th/" style="width: 300px" target="_blank">--}}
                {{--เว็บหลักราชภัฏเชียงใหม่--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="http://www.science.cmru.ac.th/" style="width: 300px" target="_blank">--}}
                {{--คณะวิทยาศาสตร์และเทคโนโลยี--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="http://www.academic.cmru.ac.th/" style="width: 300px" target="_blank">--}}
                {{--สำนักส่งเสริมวิชาการ--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('department.12') }}" style="width: 300px">--}}
                {{--การศึกษาอิสระ สาขาคอมพิวเตอร์--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}

                <div class="navy">
                    <ul>
                        @foreach (App\Models\Category::all() as $category)
                            <li>
                                <a href="{{ !is_null($category->link_page) ? $category->link_page : 'javascript:void(0);' }}">
                                    {{ $category->category_name }}
                                </a>
                                @if (count($category->sub_category()->get()) > 0)
                                    <ul>
                                        @foreach ($category->sub_category()->get() as $sub_category)
                                            <li>
                                                <a href="{{ $sub_category->link_page }}"
                                                   target="{{ $sub_category->new_tab ? '_blank' : '_self' }}"
                                                   style="width: 310px">
                                                    {{ $sub_category->sub_category_name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Navigation ends -->

            </div>

        </div>
    </div>
</div>
