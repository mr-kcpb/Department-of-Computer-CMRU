@extends('layouts.front-end.app')
@section('content')
    <div class="main-block">
        <div class="container" style="min-height: 100vh; margin-bottom: 30px">
            <div class="divider-1"></div>

            <div class="block-heading-two">
                <h3><span>กิจกรรมล่าสุด</span></h3>
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
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/1.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/1.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/2.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/2.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/3.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/3.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/4.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/4.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/5.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/5.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/6.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/6.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/7.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/7.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
                            <div class="owl-content">
                                <a href="{{ asset('template/front-end/img/gallery/small/8.jpg') }}"
                                   class="lightbox"><img src="{{ asset('template/front-end/img/gallery/small/8.jpg') }}"
                                                         alt="" class="img-responsive img-thumbnail"/></a>
                                <h4><a href="#">Some heading here now</a></h4>
                                <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat raw denim aesthetic. </p>
                                <a href="#" class="btn btn-color btn-xs">Read more</a>
                            </div>
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
                <div class="col-md-12 col-sm-6">
                    <div class="panel-group accordion-alt3" id="accordion-alt3">
                        @foreach ($announces as $announce)
                            <a href="{{ route('get.announce', ['id' => $announce->id]) }}">
                                <p class="text-success">
                                    {{ $announce->created_at }}&ensp;{{ $announce->title }}
                                </p>
                            </a>
                        @endforeach
                        <div class="form-group text-right">
                            <a href="#">
                                <small>
                                    ข่าวประชาสัมพันธ์ ทั้งหมด
                                    <i class="fa fa-angle-double-right"></i>
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="block-heading-two">
                <h3><span>กิจกรรมภาควิชาฯ</span></h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    @foreach ($activities as $activity)
                        <a href="{{ route('get.activity', ['id' => $activity->id]) }}">
                            <p class="text-danger">
                                {{ $activity->created_at }}&ensp;{{ $activity->title }}
                            </p>
                        </a>
                    @endforeach
                    <div class="form-group text-right">
                        <a href="#">
                            <small>
                                กิจกรรมภาควิชาฯ ทั้งหมด
                                <i class="fa fa-angle-double-right"></i>
                            </small>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
