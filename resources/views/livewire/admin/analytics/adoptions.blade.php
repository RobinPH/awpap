@php
@endphp

<x-layout.admin>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"
        integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="flex flex-col gap-4">
        <div class="w-full shadow-xl card bg-base-100">
            <div class="card-body">
                <h2 class="card-title">Adoption Analytics</h2>
                <canvas id="web-traffic-count-chart"></canvas>
            </div>
        </div>
    </div>

    <script defer>
        const countChartCtx = document.getElementById('web-traffic-count-chart');

        const histories = {!! json_encode($history) !!};

        const counts = {};

        for (let i = 0; i < 25; i++) {
            counts[moment().subtract(i, "days").format('YYYY-MM-DD 00:00:00')] = 0;
        }

        for (const history of histories) {
            counts[moment.utc(history["start_time"]).local().format('YYYY-MM-DD 00:00:00')] = history["count"];
        }

        new Chart(countChartCtx, {
            type: 'line',
            data: {
                labels: Array.from({
                    length: 25
                }).map((_, idx) => `${24 - idx}days ago`),
                datasets: [{
                    label: 'Number of Adoptions',
                    data: Object.values(counts).reverse(),
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
        });
    </script>
</x-layout.admin>
