@extends('user.main')
@push('styles')
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.3/dist/chart.umd.min.js"></script>
    <script src="/js/user/profile/index.js" type="text/javascript"></script>
    <script>
        function convertStringToMin(str) {
            let time = str.split(':');
            let hour = time[0];
            let mins = time[1];
            return parseInt(hour) * 60 + parseInt(mins);
        }

        function getAMorPM(str) {
            let time = str.split(':');
            let hour = time[0];
            return str + ' ' + (parseInt(hour) >= 12 ? 'PM' : 'AM');
        }

        function getDiffHour(start_time, end_time) {
            let mins = convertStringToMin(end_time) - convertStringToMin(start_time);
            return Number.parseFloat(mins / 60).toFixed(1);;
        }

        let service_types = JSON.parse($('#service_types').val());
        let volunteer_hours = JSON.parse($('#volunteer_hours').val());
        let labels = [];
        let data = [];
        service_types.forEach(e => {
            labels.push(e.name);
            let check = false;
            let val = 0;
            volunteer_hours.forEach(v => {
                if (v.service_type_id == e.id) {
                    check = true;
                    val = getDiffHour(v.start_time, v.end_time);
                }
            });
            data.push(val);
        });

        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of Hours',
                    data: data,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
@section('content')
    <div>
        @include('user.subheader')
        @include('user.profile.bar')
        <div class="container mx-auto px-2 md:px-4 lg:px-0 py-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 md:gap-3 lg:gap-3">
                @include('user.log.sidebar')
                <div class="col-span-10 mt-5 md:mt-0 lg:mt-0">
                    <div>
                        <h1 class="text-3xl text-secondary">Total Hours by cause since joining Lion's Heart</h1>
                        <div class="w-full bg-white p-4 border-1 rounded col-span-2 lg:col-span-1 md:col-span-1"><canvas
                                role="img" height="702" width="1404"
                                style="display: block; box-sizing: border-box; height: 351px; width: 702px;"></canvas></div>
                    </div>
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                    <input type="hidden" id="service_types" value="{{ json_encode($service_types) }}" />
                    <input type="hidden" id="volunteer_hours" value="{{ json_encode($volunteer_hours) }}" />
                </div>
            </div>
        </div>
    </div>
@endsection
