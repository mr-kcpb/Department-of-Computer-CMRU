@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">
        <div class="page-heading-two">
            <div class="container">
                <h2>{{ $announce->title }}</h2>
                <div class="breads">
                    ข่าวประชาสัมพันธ์ / <a href="{{ route('get.announce', ['id' => $announce->id]) }}">{{ $announce->title }}</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container" style="min-height: 100vh">
            <div class="blog-three">
                <div class="row">
                    <div class="col-xs-12">
                        {!! $announce->detail !!}
                    </div>
                </div>
            </div>
        </div>

@endsection
