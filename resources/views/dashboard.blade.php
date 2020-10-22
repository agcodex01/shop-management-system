@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-0 bg-transparent">
            <div class="card-header bg-transparent d-flex justify-content-between">
                <b>Dashboard</b>
                <span>{{ date('d D M Y') }}</span>
            </div>

            <div class="card-body">
                <div class="row">
                    @for ($num = 0; $num < 3; $num++)
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-body bg-primary text-white">
                                    <h4>Orders</h4>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <div class="col-md-12">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection

@section('script')
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
@endsection
