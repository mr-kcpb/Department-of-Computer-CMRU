@extends('layouts.front-end.app')
@section('content')

    <div class="main-block real-estate">

        <div class="page-heading-two">
            <div class="container">
                <h2>บุคลากร ภาควิชาคอมพิวเตอร์</h2>
                <div class="breads">
                    หน้าหลัก / <a href="{{ route('personal') }}">บุคลากร</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- property search big form -->
        <div class="re-big-form">

            <div class="container">

                <!-- Actual content -->
                <div class="rs-property">

                    <!-- Team #7 -->
                    <div class="team-seven">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-offset-5 col-md-2">

                                <div class="form-group text-center">
                                    <h3>หัวหน้าภาควิชา</h3>
                                </div>

                                <!-- Team member -->
                                <div class="team-member">
                                    <div class="t-container">
                                        <img class="img-responsive"
                                             src="{{ getImage('users/'.$root->user_id.'.jpg') }}"
                                             alt="user"/>
                                    </div>
                                    <!-- Name -->
                                    <h6>{{ $root->prefix->prefix_name }}<br>{{ $root->getFullName() }}</h6>
                                    <!-- Contact details -->
                                    <div class="contact-details">
                                        <p class="text-primary">สังกัด ภาควิชาคอมพิวเตอร์</p>
                                        <p class="text-primary">สถานะ ทำงานปกติ</p>
                                        <p class="text-primary">ห้องพักอาจารย์ 221</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($users as $user)
                                <div class="col-xs-6 col-sm-3 col-md-2">
                                    <!-- Team member -->
                                    <div class="team-member">
                                        <div class="t-container">
                                            <img class="img-responsive"
                                                 src="{{ getImage('users/'.$user->user_id.'.jpg') }}"
                                                 alt="user"/>
                                        </div>
                                        <!-- Name -->
                                        <h6>{{ $user->prefix->prefix_name }}<br>{{ $user->getFullName() }}</h6>
                                        <!-- Contact details -->
                                        <div class="contact-details">
                                            <p class="text-primary">สังกัด ภาควิชาคอมพิวเตอร์</p>
                                            <p class="text-primary">สถานะ ทำงานปกติ</p>
                                            <p class="text-primary">ห้องพักอาจารย์ 221</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Team #7 end -->

                </div>

            </div>

        </div>

    </div>

@endsection
