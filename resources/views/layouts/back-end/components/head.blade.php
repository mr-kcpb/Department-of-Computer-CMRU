<head>
    <meta charset="utf-8"/>
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset('template/back-end/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet"
          type="text/css"/>
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset('template/back-end/vendors/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-select/dist/css/bootstrap-select.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/select2/dist/css/select2.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/nouislider/distribute/nouislider.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/owl.carousel/dist/assets/owl.theme.default.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/summernote/dist/summernote.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/animate.css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/jstree/dist/themes/default/style.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/chartist/dist/chartist.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/vendors/flaticon/css/flaticon.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/vendors/metronic/css/styles.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('template/back-end/vendors/vendors/fontawesome5/css/all.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->
    <link href="{{ asset('template/back-end/assets/demo/base/style.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="{{ asset('template/back-end/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}"
          rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{ asset('template/back-end/assets/demo/media/img/logo/favicon.ico') }}"/>
</head>
