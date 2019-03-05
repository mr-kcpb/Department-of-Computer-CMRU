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
    {{--<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar-3.10.0/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar-3.10.0/fullcalendar.print.min.css') }}">

    <!-- Google Fonts -->
    <!-- Code snippet to speed up Google Fonts rendering: googlefonts.3perf.com -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Kanit" as="fetch" crossorigin="anonymous">
    <script type="text/javascript">
        !function (e, n, t) {
            "use strict";
            var o = "https://fonts.googleapis.com/css?family=Kanit", r = "__3perf_googleFontsStylesheet";

            function c(e) {
                (n.head || n.body).appendChild(e)
            }

            function a() {
                var e = n.createElement("link");
                e.href = o, e.rel = "stylesheet", c(e)
            }

            function f(e) {
                if (!n.getElementById(r)) {
                    var t = n.createElement("style");
                    t.id = r, c(t)
                }
                n.getElementById(r).innerHTML = e
            }

            e.FontFace && e.FontFace.prototype.hasOwnProperty("display") ? (t[r] && f(t[r]), fetch(o).then(function (e) {
                return e.text()
            }).then(function (e) {
                return e.replace(/@font-face {/g, "@font-face{font-display:swap;")
            }).then(function (e) {
                return t[r] = e
            }).then(f).catch(a)) : a()
        }(window, document, localStorage);
    </script>
    <!-- End of code snippet for Google Fonts -->
    <!-- End Google Fonts -->

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

        .text-primary, .text-primary > * {
            color: #3366ff !important;
        }

        .text-danger, .text-danger > * {
            color: #ff5050 !important;
        }

        p {
            font-size: 16px;
        }

        .fc-widget-header, .fc-list-item {
            font-size: 16px;
        }
    </style>

    @stack('css')
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
{{--<script src="{{ asset('template/front-end/js/main.js') }}"></script>--}}
<script src="{{ asset('plugins/fullcalendar-3.10.0/lib/moment.min.js') }}"></script>
{{--<script src="{{ asset('plugins/fullcalendar-3.10.0/lib/jquery.min.js') }}"></script>--}}
<script src="{{ asset('plugins/fullcalendar-3.10.0/fullcalendar.min.js') }}"></script>

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
