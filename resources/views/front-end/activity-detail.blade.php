@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">
        <div class="page-heading-two">
            <div class="container">
                <h2>{{ $activity->title }}</h2>
                <div class="breads">
                    กิจกรรมภาควิชาฯ / <a href="{{ route('get.announce', ['id' => $activity->id]) }}">{{ $activity->title }}</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container" style="min-height: 100vh">
            <div class="blog-three">
                <div class="row">
                    <div class="col-xs-12">
                        {!! $activity->detail !!}
                    </div>
                </div>
            </div>
        </div>

@endsection
