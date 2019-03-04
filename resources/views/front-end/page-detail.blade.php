@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">
        <div class="page-heading-two">
            <div class="container">
                <h2>{{ $page->title }}</h2>
            </div>
        </div>
        <div class="container" style="min-height: 100vh">
            <div class="blog-three">
                <div class="row">
                    <div class="col-xs-12">
                        {!! $page->detail !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
