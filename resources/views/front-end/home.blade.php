@extends('layouts.front-end.app')
@section('content')
    <div class="main-block">
        <div class="container" style="min-height: 100vh; margin-bottom: 30px">

            <!-- Revolution slider full width starts -->
            <div class="r-slider">
                <div class="bannercontainer">
                    <div class="banner">
                        <ul>
                            <li data-transition="fadefromright" data-slotamount="5">
                                <img src="https://www.cmru.ac.th/assets/images/banners/th/07-02-2019/806d1b242eec6277ed8b4e05d746bcdbd4630bda." alt=""
                                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            </li>
                            <li data-transition="fadefromright" data-slotamount="5">
                                <img src="https://www.cmru.ac.th/assets/images/banners/th/28-02-2019/ab49fc063077a6153c8669e816d0ab32bc1ad9b8.png" alt=""
                                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            </li>
                            <li data-transition="fadefromright" data-slotamount="5">
                                <img src="https://www.cmru.ac.th/assets/images/banners/th/14-01-2019/7e71d1413714eb44ee2b9adebd3626621281633f.png" alt=""
                                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            </li>
                            <li data-transition="fadefromright" data-slotamount="5">
                                <img src="https://www.cmru.ac.th/assets/images/banners/th/31-01-2019/66da94af3e7ce022a353873cec00af339fbd6796.png" alt=""
                                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            </li>
                            <li data-transition="fadefromright" data-slotamount="5">
                                <img src="https://www.cmru.ac.th/assets/images/banners/th/01-11-2018/83e76e28f63283dfb1da77e374b4b4970013e2dc.jpg" alt=""
                                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            </li>
                            <li data-transition="fadefromright" data-slotamount="5">
                                <img src="https://www.cmru.ac.th/assets/images/banners/th/10-09-2018/14f422a5ed6f85e4b3a4803fddc93232c57cf265.jpg" alt=""
                                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            </li>
                            <li data-transition="fadefromright" data-slotamount="5">
                                <img src="https://www.cmru.ac.th/assets/images/banners/th/14-11-2018/5e84f6aad999eff3d27967d5b5a53349e5e7f4c1." alt=""
                                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- Revolution slider full width ends -->

            <div class="divider-1"></div>

            <div class="block-heading-two">
                <h3><span>กิจกรรมภาควิชาฯ</span></h3>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">

                        <!-- Owl carousel block starts -->
                        <!-- Owl navigation -->
                        <div class="owl-nav">
                            <a class="owl-nav-prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="owl-nav-next"><i class="fa fa-chevron-right"></i></a>
                        </div>
                        <!-- Change values of data-items, data-auto-play, data-pagination & data-single-item  based on your needs -->
                        <div class="owl-carousel" data-items="4" data-auto-play="true" data-pagination="false"
                             data-single-item="false">
                            <!-- Carousel item -->

                            @foreach ($activities as $activity)

                                <div class="owl-content">
                                    <a href="{{ asset('storage/'.$activity->cover_image) }}"
                                       class="lightbox"><img src="{{ asset('storage/'.$activity->cover_image) }}"
                                                             alt="" class="img-responsive img-thumbnail"/></a>
                                    <h4>
                                        <a href="{{ route('get.activity', ['id' => $activity->id]) }}">{{ $activity->shortTitle() }}</a>
                                    </h4>
                                    <p>{{ $activity->shortDetail() }}</p>
                                    <a href="{{ route('get.activity', ['id' => $activity->id]) }}"
                                       class="btn btn-color btn-xs">รายละเอียด</a>
                                </div>

                            @endforeach

                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/1.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/1.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/2.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/2.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/3.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/3.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/4.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/4.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/5.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/5.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/6.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/6.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/7.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/7.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                            {{--<div class="owl-content">--}}
                            {{--<a href="{{ asset('template/front-end/img/gallery/small/8.jpg') }}"--}}
                            {{--class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/8.jpg') }}"--}}
                            {{--alt="" class="img-responsive img-thumbnail"/></a>--}}
                            {{--<h4><a href="#">Some heading here now</a></h4>--}}
                            {{--<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>--}}
                            {{--<a href="#" class="btn btn-color btn-xs">Read more</a>--}}
                            {{--</div>--}}
                        </div>
                        <!-- Owl carousel block ends -->

                    </div>
                </div>
            </div>
            <br>
            <div class="block-heading-two">
                <h3><span>ข่าวประชาสัมพันธ์</span></h3>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="panel-group accordion-alt3" id="accordion-alt3">
                        @foreach ($announces as $announce)
                            <a href="{{ route('get.announce', ['id' => $announce->id]) }}">
                                <p class="text-primary">
                                    <span class="text-danger">{{ $announce->created_at }}</span>&ensp;
                                    {{ $announce->shortTitle() }}
                                </p>
                            </a>
                        @endforeach
                        <hr>
                        <div class="form-group text-right">
                            <a href="#">
                                <p class="text-success">
                                    ข่าวประชาสัมพันธ์ ทั้งหมด
                                    <i class="fa fa-angle-double-right"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCMRUCOMPUTER%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
                            width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
            <br/>
            {{--<div class="block-heading-two">--}}
            {{--<h3><span>กิจกรรมภาควิชาฯ</span></h3>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-12 col-sm-6">--}}
            {{--@foreach ($activities as $activity)--}}
            {{--<a href="{{ route('get.activity', ['id' => $activity->id]) }}">--}}
            {{--<p class="text-danger">--}}
            {{--{{ $activity->created_at }}&ensp;{{ $activity->title }}--}}
            {{--</p>--}}
            {{--</a>--}}
            {{--@endforeach--}}
            {{--<div class="form-group text-right">--}}
            {{--<a href="#">--}}
            {{--<small>--}}
            {{--กิจกรรมภาควิชาฯ ทั้งหมด--}}
            {{--<i class="fa fa-angle-double-right"></i>--}}
            {{--</small>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>

    {{--<div class="quote-two">--}}
    {{--<!-- Container -->--}}
    {{--<div class="container">--}}
    {{--<!-- Quote Two Content -->--}}
    {{--<div class="quote-two-content">--}}
    {{--<span>“</span>--}}
    {{--<div class="owl-carousel owl-theme" data-items="1" data-auto-play="true" data-pagination="true"--}}
    {{--data-single-item="true" style="opacity: 1; display: block;">--}}
    {{--<!-- Item -->--}}
    {{--<div class="owl-wrapper-outer">--}}
    {{--<div class="owl-wrapper">--}}
    {{--<div class="owl-item" style="width: 900px;">--}}
    {{--<div class="item">--}}
    {{--<h3>คำอธิบายเกี่ยวกับภาควิชาฯ</h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection

@push ('script')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.r-slider .banner').revolution({
                delay:7000,
                startheight:400,
                startwidth:1000,
                startWithSlide:0,

                fullScreenAlignForce:"off",
                autoHeight:"off",

                shuffle:"off",

                onHoverStop:"on",

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:3,

                hideThumbsOnMobile:"on",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResoluition:0,

                hideThumbs:10,
                hideTimerBar:"on",

                keyboardNavigation:"on",

                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"round",

                navigationHAlign:"center",
                navigationVAlign:"bottom",

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,


                touchenabled:"on",
                swipe_velocity:"0.7",
                swipe_max_touches:"1",
                swipe_min_touches:"1",
                drag_block_vertical:"false",

                stopAtSlide:-1,
                stopAfterLoops:-1,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                hideSliderAtLimit:0,

                dottedOverlay:"none",

                spinned:"spinner4",

                fullWidth:"off",
                forceFullWidth:"off",
                fullScreen:"off",
                fullScreenOffsetContainer:"#topheader-to-offset",

            });
        });
    </script>
@endpush
