<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>Department of Computer, CMRU.</title>
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('template/front-end/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/front-end/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/front-end/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('template/front-end/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('template/front-end/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('template/front-end/css/styles/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template/front-end/css/styles/skin-lblue.css') }}" rel="stylesheet" id="color_theme">
    <link href="{{ asset('template/front-end/css/custom.css') }}" rel="stylesheet">
    {{--<link rel="shortcut icon" href="#">--}}
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6, span, p {
            font-family: 'Kanit', sans-serif !important;
        }

        .navy ul li a {
            font-size: 18px !important;
        }

        .navy ul li ul li a {
            font-size: 14px !important;
        }

        .tab {
            display: inline-block;
            margin-left: 40px;
        }

        .pt-10 {
            padding-top: 10px;
        }

        .pt-20 {
            padding-top: 20px;
        }

        .pt-30 {
            padding-top: 30px;
        }

        .pb-10 {
            padding-bottom: 10px;
        }

        .pb-20 {
            padding-bottom: 20px;
        }

        .pb-30 {
            padding-bottom: 30px;
        }

        .text-success, .text-success > * {
            color: #00b300 !important;
        }

        p {
            font-size: 16px;
        }
    </style>
</head>

<body>
<!-- Outer Starts -->
<div class="outer" style="min-height: 100vh">
    @include('layouts.front-end.components.topbar')
    @include('layouts.front-end.components.navbar')
    @yield('content')
    @include('layouts.front-end.components.footer')
</div>
<!-- Outer Ends -->

<!-- Scroll to top -->
{{--<span class="totop"><a href="#"><i class="fa fa-angle-up bg-color"></i></a></span>--}}

<script src="{{ asset('template/front-end/js/jquery.js') }}"></script>
<script src="{{ asset('template/front-end/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/front-end/js/placeholders.js') }}"></script>
<script src="{{ asset('template/front-end/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template/front-end/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/front-end/js/respond.min.js') }}"></script>
<script src="{{ asset('template/front-end/js/html5shiv.js') }}"></script>
<script src="{{ asset('template/front-end/js/main.js') }}"></script>
<script src="{{ asset('template/front-end/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('template/front-end/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('template/front-end/js/waypoints.min.js') }}"></script>
<script src="{{ asset('template/front-end/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('template/front-end/js/custom.js') }}"></script>
<script src="{{ asset('js/response.min.js') }}"></script>

<script>
    $(document).ready(function () {
        if (Response.deviceW() < 576) {
            console.log('mobile');
            $('#navbar-logo').css({'display': 'block'});
        }
    });
</script>

@stack('script')

</body>
</html>
