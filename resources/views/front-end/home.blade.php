@extends('layouts.front-end.app')
@section('content')

    <!-- Main content starts -->

    <div class="main-block">

        {{--        @include('layouts.components.carousel')--}}

        <div class="container" style="min-height: 100vh;">

            <div class="divider-1"></div>

            <div class="block-heading-two">
                <h3><span>ข่าวประชาสัมพันธ์</span></h3>
            </div>

            <div class="row">

                <div class="col-md-12 col-sm-6">
                    <div class="panel-group accordion-alt3" id="accordion-alt3">
                        @foreach ($announces as $announce)
                            <a href="{{ route('get.announce', ['id' => $announce->id]) }}">
                                <p class="text-success">
                                    01/12/2017&ensp;{{ $announce->title }}
                                </p>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>

            <br/>

            <div class="block-heading-two">
                <h3><span>กิจกรรมภาควิชาฯ</span></h3>
            </div>

            <div class="row">

                <div class="col-md-12 col-sm-6">

                    <!-- Accordion starts -->
                    <div class="panel-group accordion-alt3" id="accordion-alt3">
                        <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                        {{--<div class="panel">--}}
                        {{--<!-- Panel heading -->--}}
                        {{--<div class="panel-heading">--}}
                        {{--<h4 class="panel-title">--}}
                        {{--01/12/2017 &ensp;--}}
                        {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">--}}
                        {{--<i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #1--}}
                        {{--</a>--}}
                        {{--</h4>--}}
                        {{--</div>--}}
                        {{--<div id="collapseOne-alt3" class="panel-collapse collapse">--}}
                        {{--<!-- Panel body -->--}}
                        {{--<div class="panel-body">--}}
                        {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
                        {{--richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
                        {{--brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt--}}
                        {{--aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.--}}
                        {{--Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente--}}
                        {{--ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer--}}
                        {{--farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them--}}
                        {{--accusamus labore sustainable VHS.--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel">--}}
                        {{--<div class="panel-heading">--}}
                        {{--<h4 class="panel-title">--}}
                        {{--01/12/2017 &ensp;--}}
                        {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">--}}
                        {{--<i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #2--}}
                        {{--</a>--}}
                        {{--</h4>--}}
                        {{--</div>--}}
                        {{--<div id="collapseTwo-alt3" class="panel-collapse collapse">--}}
                        {{--<div class="panel-body">--}}
                        {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
                        {{--richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
                        {{--brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt--}}
                        {{--aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.--}}
                        {{--Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente--}}
                        {{--ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer--}}
                        {{--farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them--}}
                        {{--accusamus labore sustainable VHS.--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel">--}}
                        {{--<div class="panel-heading">--}}
                        {{--<h4 class="panel-title">--}}
                        {{--01/12/2017 &ensp;--}}
                        {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">--}}
                        {{--<i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #3--}}
                        {{--</a>--}}
                        {{--</h4>--}}
                        {{--</div>--}}
                        {{--<div id="collapseThree-alt3" class="panel-collapse collapse">--}}
                        {{--<div class="panel-body">--}}
                        {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
                        {{--richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
                        {{--brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt--}}
                        {{--aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.--}}
                        {{--Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente--}}
                        {{--ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer--}}
                        {{--farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them--}}
                        {{--accusamus labore sustainable VHS.--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="panel">--}}
                        {{--<div class="panel-heading">--}}
                        {{--<h4 class="panel-title">--}}
                        {{--01/12/2017 &ensp;--}}
                        {{--<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">--}}
                        {{--<i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #4--}}
                        {{--</a>--}}
                        {{--</h4>--}}
                        {{--</div>--}}
                        {{--<div id="collapseFour-alt3" class="panel-collapse collapse">--}}
                        {{--<div class="panel-body">--}}
                        {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry--}}
                        {{--richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor--}}
                        {{--brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt--}}
                        {{--aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.--}}
                        {{--Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente--}}
                        {{--ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer--}}
                        {{--farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them--}}
                        {{--accusamus labore sustainable VHS.--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <!-- Accordion ends -->

                </div>

            </div>

            <br/>

            <div class="block-heading-two">
                <h3><span>กิจกรรมล่าสุด</span></h3>
            </div>

            {{--<div class="img-box-4 text-center">--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-3 col-sm-6">--}}
            {{--<!-- Image Box #4 Item -->--}}
            {{--<div class="img-box-4-item">--}}
            {{--<!-- Image -->--}}
            {{--<a href="{{ asset('template/img/gallery/small/1.jpg') }}" class="lightbox"><img--}}
            {{--src="{{ asset('template/img/gallery/small/1.jpg') }}" alt=""--}}
            {{--class="img-responsive"/></a>--}}
            {{--<!-- Image Box #4 Content -->--}}
            {{--<div class="img-box-4-content">--}}
            {{--<!-- Icon -->--}}
            {{--<a href="#"><i class="fa fa-picture-o bg-red"></i></a>--}}
            {{--<!-- Heading -->--}}
            {{--<h4><a href="#">Blinded Desire</a></h4>--}}
            {{--<!-- Border -->--}}
            {{--<div class="bor bg-red"></div>--}}
            {{--<!-- Paragraph -->--}}
            {{--<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6">--}}
            {{--<div class="img-box-4-item">--}}
            {{--<a href="{{ asset('template/img/gallery/small/2.jpg') }}" class="lightbox"><img--}}
            {{--src="{{ asset('template/img/gallery/small/2.jpg') }}" alt=""--}}
            {{--class="img-responsive"/></a>--}}
            {{--<div class="img-box-4-content">--}}
            {{--<a href="#"><i class="fa fa-video-camera bg-lblue"></i></a>--}}
            {{--<h4><a href="#">Itaque Earum</a></h4>--}}
            {{--<div class="bor bg-lblue"></div>--}}
            {{--<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6">--}}
            {{--<div class="img-box-4-item">--}}
            {{--<a href="{{ asset('template/img/gallery/small/3.jpg') }}" class="lightbox"><img--}}
            {{--src="{{ asset('template/img/gallery/small/3.jpg') }}" alt=""--}}
            {{--class="img-responsive"/></a>--}}
            {{--<div class="img-box-4-content">--}}
            {{--<a href="#"><i class="fa fa-music bg-green"></i></a>--}}
            {{--<h4><a href="#">Rerum Tenetur</a></h4>--}}
            {{--<div class="bor bg-green"></div>--}}
            {{--<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 col-sm-6">--}}
            {{--<div class="img-box-4-item">--}}
            {{--<a href="{{ asset('template/img/gallery/small/4.jpg') }}" class="lightbox"><img--}}
            {{--src="{{ asset('template/img/gallery/small/4.jpg') }}" alt=""--}}
            {{--class="img-responsive"/></a>--}}
            {{--<div class="img-box-4-content">--}}
            {{--<a href="#"><i class="fa fa-picture-o bg-purple"></i></a>--}}
            {{--<h4><a href="#">Maiores Alias</a></h4>--}}
            {{--<div class="bor bg-purple"></div>--}}
            {{--<p>Certain circumstances and owing libero tempore minus to the owing claims of duty.</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}


        </div>

        {{--<br/><br/>--}}

        {{--<div class="quote-two">--}}
        {{--<!-- Container -->--}}
        {{--<div class="container">--}}
        {{--<!-- Quote Two Content -->--}}
        {{--<div class="quote-two-content">--}}
        {{--<span>&#8220;</span>--}}
        {{--<div class="owl-carousel" data-items="1" data-auto-play="true" data-pagination="true"--}}
        {{--data-single-item="true">--}}
        {{--<!-- Item -->--}}
        {{--<div class="item">--}}
        {{--<h3>At vero eos et accusamus et iusto odio dignissimos ducimus indignation qui blanditiis--}}
        {{--praesentium voluptatum.</h3>--}}
        {{--- Helon Thomas--}}
        {{--</div>--}}
        {{--<div class="item">--}}
        {{--<h3>Indignation qui blanditiis praesentium voluptatum at vero eos et accusamus et iusto odio--}}
        {{--dignissimos ducimus.</h3>--}}
        {{--- Helon Peter--}}
        {{--</div>--}}
        {{--<div class="item">--}}
        {{--<h3>On the other hand, we denounce with righteous indignation and dislike men who are so--}}
        {{--beguiled and demoralized.</h3>--}}
        {{--- John Mark--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<br/>--}}

        {{--<div class="container">--}}

        {{--<!-- Block heading two -->--}}
        {{--<div class="block-heading-two">--}}
        {{--<h3><span>สายอาชีพที่เกี่ยวข้องกับภาควิชาฯ</span></h3>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
        {{--<div class="col-md-7 col-sm-6">--}}
        {{--<p class="para-big">Praesent orci eros, rhoncus et neque sit amet, lobortis auctor libero. Vivamus--}}
        {{--sed laoreet enim. Donec iaculis eros ac leo venenatis porta. Ut eget velit nec velit varius--}}
        {{--tincidunt. Etiam vel egestas dolor, ac interdum felis.</p>--}}
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut euismod sapien. Donec eu feugiat--}}
        {{--enim, sed tempus arcu. Pellentesque magna nisi, consectetur eget interdum non, interdum a nisl.--}}
        {{--Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent--}}
        {{--orci eros, rhoncus et neque sit amet, lobortis auctor libero. Vivamus sed laoreet enim. Donec--}}
        {{--iaculis eros ac leo venenatis porta. Cras tincidunt nisl id lobortis mollis. Ut pretium, quam ut--}}
        {{--rhoncus pharetra, dui lectus tincidunt risus, eu rhoncus odio tortor fermentum augue. Nulla--}}
        {{--rutrum bibendum nisl sagittis mollis. Duis adipiscing libero nisi, nec cursus risus dapibus--}}
        {{--ac.</p>--}}
        {{--<br/>--}}
        {{--</div>--}}
        {{--<div class="col-md-5 col-sm-6 text-center">--}}
        {{--<a href="#"><img src="{{ asset('template/img/rev-slider/mockup1.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<br/>--}}
        {{--<hr/>--}}
        {{--<br/>--}}

        {{--<div class="block-heading-two text-center">--}}
        {{--<h3><span>สถานประกอบการ รับนักศึกษาฝึกงาน ภาควิชาฯ</span></h3>--}}
        {{--</div>--}}
        {{--<!-- Client One Starts -->--}}
        {{--<br/>--}}

        {{--<div class="client-one">--}}
        {{--<div class="owl-carousel" data-items="5" data-auto-play="true" data-pagination="false"--}}
        {{--data-single-item="false">--}}
        {{--<!-- Item -->--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-1.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Variations</a></h5>--}}
        {{--</div>--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-2.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Repetition</a></h5>--}}
        {{--</div>--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-3.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Pleasure</a></h5>--}}
        {{--</div>--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-4.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Molestiae</a></h5>--}}
        {{--</div>--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-5.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Extremely</a></h5>--}}
        {{--</div>--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-6.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Annoying</a></h5>--}}
        {{--</div>--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-2.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Doloribus</a></h5>--}}
        {{--</div>--}}
        {{--<div class="c1-item">--}}
        {{--<a href="#"><img src="{{ asset('template/img/clients/c1-3.png') }}" alt=""--}}
        {{--class="img-responsive"/></a>--}}
        {{--<div class="img-hover"></div>--}}
        {{--<h5><a href="#">Repellat</a></h5>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Client One Ends -->--}}


        {{--</div>--}}
    </div>

    <!-- Main content ends -->

@endsection
