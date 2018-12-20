@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">

        <!-- Page heading two starts -->

        <div class="page-heading-two">
            <div class="container">
                <h2>หลักสูตรภาควิชาคอมพิวเตอร์</h2>
                <div class="breads">
                    หน้าหลัก / <a href="{{ route('course') }}">หลักสูตร</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Page heading two ends -->

        <div class="container">

            <!-- blog three -->
            <div class="blog-three">
                <div class="row">
                    <!-- Mainbar column -->
                    <div class="col-md-12">

                        <!-- Blog item starts -->
                        <div class="blog-three-item">
                            <!-- blog three slider -->

                            <!-- Carousel -->

                            <!-- Bootstrap carousel usage
                                Bootstrap carousel should have id. Below i am using "bs-carousel-X". Where "X" denotes number". If a page has more than 1 carousel, then add the new carousel with the id "bs-carousel-1", "bs-carousel-2". You also need to update the id in, "carousel indicators" section and "carousel control" section.

                                Carousel comes with 3 main data attributes which you can customize. They are...
                                data-interval - Time delay between item cycle. Default value "5000".
                                data-pause - Pause on hover. Default value "pause".
                                data-wrap - Continues cycle or stop at the end. Default value "true".
                            -->

                            <!-- Outer layer -->
                            <div id="bs-carousel-1" class="carousel slide" data-ride="carousel" data-interval="5000"
                                 data-pause="hover" data-wrap="true">
                                <!-- Bootstrap indicators. If you don't need indicators, remove the below section -->
                                <ol class="carousel-indicators">
                                    <li data-target="#bs-carousel-1" data-slide-to="0" class="active"></li>
                                    <li data-target="#bs-carousel-1" data-slide-to="1"></li>
                                    <li data-target="#bs-carousel-1" data-slide-to="2"></li>
                                </ol>
                                <!-- Slides. You can also add captions -->
                                <div class="carousel-inner">
                                    <!-- Item, First item should have extra class "active" -->
                                    <div class="item active">
                                        <!-- Image -->
                                        <img src="{{ asset('template/img/backgrounds/s1.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('template/img/backgrounds/s2.jpg') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('template/img/backgrounds/s3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Carousel controls (arrows). If you don't need controls, remove the below section -->
                                <a class="left carousel-control" href="#bs-carousel-1" role="button" data-slide="prev">
                                    <span class="fa fa-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#bs-carousel-1" role="button" data-slide="next">
                                    <span class="fa fa-chevron-right"></span>
                                </a>
                            </div>

                            <!-- blog three Content -->
                            <div class="blog-three-content">
                                <!-- Heading -->
                                <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
                                <!-- Blog meta -->
                                <div class="blog-meta">
                                    <!-- Date -->
                                    <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                                    <!-- Author -->
                                    <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                                    <!-- Comments -->
                                    <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
                                </div>
                                <!-- Paragraph -->
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum hic
                                    tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                    saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum
                                    hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                    recusandae rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut
                                    rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                    non recusandae rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis
                                    aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                    molestiae non recusandae rerum hic tenetur. Temporibus autem quibusdam et aut
                                    officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae
                                    sint et molestiae non recusandae rerum hic tenetur. </p>
                            </div>
                        </div>
                        <!-- Blog item ends -->

                        <!-- Blog item starts -->
                        <div class="blog-three-item">
                            <!-- blog three Img -->
                            <div class="blog-three-video video-container">
                                <!-- Video -->
                                <iframe src="http://www.youtube.com/embed/jhNszvpJxho?iv_load_policy=3&amp;vq=hd720&amp;autoplay=1&amp;rel=0"
                                        allowfullscreen></iframe>
                            </div>
                            <!-- blog three Content -->
                            <div class="blog-three-content">
                                <!-- Heading -->
                                <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
                                <!-- Blog meta -->
                                <div class="blog-meta">
                                    <!-- Date -->
                                    <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                                    <!-- Author -->
                                    <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                                    <!-- Comments -->
                                    <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
                                </div>
                                <!-- Paragraph -->
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum hic
                                    tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                    saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum
                                    hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                    recusandae rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut
                                    rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                    non recusandae rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis
                                    aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                    molestiae non recusandae rerum hic tenetur. Temporibus autem quibusdam et aut
                                    officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae
                                    sint et molestiae non recusandae rerum hic tenetur. </p>
                            </div>
                        </div>
                        <!-- Blog item ends -->

                        <!-- Blog item starts -->
                        <div class="blog-three-item">
                            <!-- blog three Img -->
                            <div class="blog-three-img">
                                <!-- Image -->
                                <a href="#"><img src="{{ asset('template/img/backgrounds/s4.jpg') }}" alt=""
                                                 class="img-responsive img-thumbnail"/></a>
                            </div>
                            <!-- blog three Content -->
                            <div class="blog-three-content">
                                <!-- Heading -->
                                <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
                                <!-- Blog meta -->
                                <div class="blog-meta">
                                    <!-- Date -->
                                    <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                                    <!-- Author -->
                                    <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                                    <!-- Comments -->
                                    <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
                                </div>
                                <!-- Paragraph -->
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum hic
                                    tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                    saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum
                                    hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                    recusandae rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut
                                    rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                    non recusandae rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis
                                    aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                    molestiae non recusandae rerum hic tenetur. Temporibus autem quibusdam et aut
                                    officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae
                                    sint et molestiae non recusandae rerum hic tenetur. </p>
                            </div>
                        </div>
                        <!-- Blog item ends -->

                        <!-- Blog item starts -->
                        <div class="blog-three-item">
                            <!-- blog three Img -->
                            <div class="blog-three-img">
                                <!-- Image -->
                                <a href="#"><img src="{{ asset('template/img/backgrounds/s1.jpg') }}" alt=""
                                                 class="img-responsive img-thumbnail"/></a>
                            </div>
                            <!-- blog three Content -->
                            <div class="blog-three-content">
                                <!-- Heading -->
                                <h3><a href="blog-single.html">Ducimus Qui Blanditiis Prey Ntium Deleniti</a></h3>
                                <!-- Blog meta -->
                                <div class="blog-meta">
                                    <!-- Date -->
                                    <a href="#"><i class="fa fa-calendar"></i> &nbsp; 24.3.2014</a> &nbsp;
                                    <!-- Author -->
                                    <a href="#"><i class="fa fa-user"></i> &nbsp; Ravi Kumar</a> &nbsp;
                                    <!-- Comments -->
                                    <a href="#"><i class="fa fa-comments"></i> &nbsp; 6 Comments</a>
                                </div>
                                <!-- Paragraph -->
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum hic
                                    tenetur. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                    saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae rerum
                                    hic tenetur.Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non
                                    recusandae rerum hic tenetur. Temporibus autem quibusdam et aut officiis debitis aut
                                    rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                    non recusandae rerum hic tenetur.Temporibus autem quibusdam et aut officiis debitis
                                    aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                    molestiae non recusandae rerum hic tenetur. Temporibus autem quibusdam et aut
                                    officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae
                                    sint et molestiae non recusandae rerum hic tenetur. </p>
                            </div>
                        </div>
                        <!-- Blog item ends -->

                        <!-- Pagination -->
                        <ul class="pagination">
                            <!-- List -->
                            <li><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
