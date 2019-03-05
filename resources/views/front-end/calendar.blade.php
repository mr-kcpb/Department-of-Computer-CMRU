@extends('layouts.front-end.app')
@push('css')
    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
@endpush
@section('content')
    <div class="container" style="margin-bottom: 60px">
        <div class="row">
            <div class="col-12">
                <div style="min-height: 100vh;">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function () {

            $('#calendar').fullCalendar({
                defaultView: 'list',
                events: [
                    @foreach ($calendars as $calendar)
                        {
                            title: '{{ $calendar->topic }}',
                            start: '{{ \Carbon\Carbon::parse($calendar->created_at)->format('Y-m-d') }}',
                        },
                    @endforeach
                ],
            });

            $('.fc-toolbar').remove();

        });

    </script>
@endpush
