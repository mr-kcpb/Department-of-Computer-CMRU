@extends('layouts.front-end.app')
@section('content')
    <div class="main-block">
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
                                    {{ $announce->created_at }}&ensp;{{ $announce->title }}
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
                    @foreach ($activities as $activity)
                        <a href="{{ route('get.activity', ['id' => $activity->id]) }}">
                            <p class="text-danger">
                                {{ $activity->created_at }}&ensp;{{ $activity->title }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
            <br/>
            <div class="block-heading-two">
                <h3><span>กิจกรรมล่าสุด</span></h3>
            </div>
        </div>
    </div>
@endsection
