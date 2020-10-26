@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between">
                <b>Dashboard</b>
                <span>{{ date('D d, M. Y') }}</span>
            </div>

            <div class="card-body">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card rounded rounded-circle">
                            <div class="card-body text-center p-4 bg-danger text-white">
                                <div class="d-inline-flex">
                                    <i class="fa fa-3x fa-user"></i>
                                    <b>( 14 )</b>
                                </div>

                                <h4 class="mt-3 font-weight-bold">CUSTOMERS </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center p-4 bg-success text-white">
                                <div class="d-inline-flex">
                                    <i class="fa fa-3x fa-list-alt mr-2"></i>
                                   <b> ( 57 ) </b>
                                </div>

                                <h4 class="mt-3 font-weight-bold">ORDERS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center p-4 bg-primary text-white">
                                <div class="d-inline-flex">
                                    <i class="fa fa-3x fa-truck mr-2"></i>
                                   <b> ( 57 ) </b>
                                </div>

                                <h4 class="mt-3 font-weight-bold">DELIVERY</h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                Montly Report
                            </div>
                            <div class="card-body">
                                <canvas id="myChart" width="400" height="200"></canvas>
                            </div>
                        </div>
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
            labels: ['Product', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
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
                }],
                xAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
@endsection
