@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">

        <div class="page-heading-two">
            <div class="container">
                <h2>ข่าวประชาสัมพันธ์</h2>
                <div class="breads">
                    หน้าหลัก / <a href="{{ route('news') }}">ข่าวสาร</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-6">

                    <!-- Accordion starts -->
                    <div class="panel-group accordion-alt3" id="accordion-alt3">
                        <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->

                        @for($i = 0; $i <= 10; $i++)

                            <div class="panel">
                                <!-- Panel heading -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        01/12/2017 &ensp;
                                        <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                                            <i class="fa fa-angle-right"></i> Minimal Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne-alt3" class="panel-collapse collapse">
                                    <!-- Panel body -->
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                        @endfor

                    </div>
                    <!-- Accordion ends -->

                </div>

            </div>

        </div>

    </div>

@endsection
