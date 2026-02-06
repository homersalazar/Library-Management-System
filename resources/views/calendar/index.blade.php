@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-2">
            <div class="flex flex-col gap-1">
                <h1 class="font-semibold text-lg text-green-900">Holiday Calendar</h1>
                <p class="text-gray-700 text-sm">
                    View the holiday calendar to see upcoming holidays and plan your library visits accordingly.
                </p>
            </div>
        </div>

        <div id='holiday_calendar'></div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var officialBusinessEl = document.getElementById('holiday_calendar');
            var calendar = new FullCalendar.Calendar(officialBusinessEl, {
                height: 650,
                initialView: 'dayGridMonth',
                selectable: true,
                events: '',
                eventDidMount: function(info) {
                    info.el.style.display = 'flex';
                    info.el.style.alignItems = 'center';
                    info.el.style.justifyContent = 'center';
                    info.el.style.textAlign = 'center';
                    info.el.style.cursor = 'pointer';
                }

            });
            calendar.render();
        });
        </script>
    </div>
@endsection
