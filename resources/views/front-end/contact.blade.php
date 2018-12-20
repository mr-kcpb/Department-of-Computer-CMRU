@extends('layouts.front-end.app')
@section('content')

    <div class="main-block">

        <div class="page-heading-two">
            <div class="container">
                <h2>ติดต่อ ภาควิชาคอมพิวเตอร์</h2>
                <div class="breads">
                    หน้าหลัก / <a href="{{ route('contact') }}">ติดต่อ</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="contact-us-one">

            <div class="contact-map">
                <!-- Map Link -->
                {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15615.590366449029!2d79.823997513746!3d11.912214884509545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x948a846878ea738c!2sAchariya+Bala+Siksha+Mandir!5e0!3m2!1sen!2sin!4v1402563074325"></iframe>--}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.077825072668!2d98.9840810155959!3d18.806704766389224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3aeb73575db7%3A0xa61747978750d27c!2sChiang+Mai+Rajabhat+University!5e0!3m2!1sen!2sth!4v1513957949468"></iframe>
            </div>
        </div>

    </div>

@endsection
