<x-master>
    <div class="container mx-auto p-4 bg-white p-6 rounded shadow-md"
        style="box-shadow: 10px 10px 20px #abafbb, -10px -10px 20px #ffffff;">
        <h1 class="text-2xl font-bold mb-6" style='color:rgb(13, 13, 14)'>Number of matches report per month for the current year </h1>
        <div class="chart-container" style="position: relative; height:65vh; width:100%">
            <canvas id="chart"></canvas>
        </div>
        <script>
            var ctx = document.getElementById('chart').getContext('2d');
            var matchChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($labels) !!},
                    datasets: {!! json_encode($datasets) !!}
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            barThickness: 1
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        </script>
    </div>
</x-master>
