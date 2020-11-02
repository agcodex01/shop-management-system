@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-transparent border-0">
            <div class="card-header bg-white rounded mx-3 d-flex justify-content-between">
                <b>Dashboard</b>
                <span>{{ date('D d, M. Y') }}</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card rouded-1 bg-danger shadow">
                            <div class="card-body text-center p-4  text-white">
                                <div class="d-inline-flex">
                                    <i class="fa fa-3x fa-user"></i>
                                    <b>( {{ $totalCustomers }} )</b>
                                </div>

                                <h5 class="mt-3 font-weight-bold">CUSTOMERS </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rouded-1 bg-success shadow">
                            <div class="card-body text-center p-4  text-white">
                                <div class="d-inline-flex">
                                    <i class="fa fa-3x fa-list-alt mr-2"></i>
                                    <b> ( {{ $totalOrders }} ) </b>
                                </div>

                                <h5 class="mt-3 font-weight-bold">ORDERS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rouded-1 bg-primary shadow">
                            <div class="card-body text-center p-4  text-white">
                                <div class="d-inline-flex">
                                    <i class="fa fa-3x fa-shopping-bag mr-2"></i>
                                    <b> ( {{ $products}} ) </b>
                                </div>

                                <h5 class="mt-3 font-weight-bold">Products</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-transparent">
                                <strong>Best Seller Product</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Total Sales</th>
                                    </tr>
                                    @foreach ($bestProducts->take(5) as $name => $detail)
                                        <tr>
                                            <td>{{ $name }}</td>
                                            <td>{{ $detail['totalQty']}}</td>
                                            <td>$ {{ number_format($detail['totalSales'], 2) }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="card border-0">
                            <div class="card-header bg-transparent d-flex justify-content-between">
                                <strong>Montly Sales Report</strong>
                                <strong>Total : $ {{ number_format($overAllSales, 2) }}</strong>
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
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var ctx = document.getElementById('myChart').getContext('2d');
            var option = {
                type: 'bar',
                data: {
                    labels: ['1st Week', '2nd Week', '3rd Week', '4th Week'],
                    datasets: [{
                        label: 'Total Sales',
                        data: [100,200,300,400],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',

                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',

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
            }
            $.ajax({
                type: "GET",
                url: "/sales_per_week",
                success: function (response) {
                    if(response.data.length) {
                        option.data.datasets[0].data = response.data
                    }

                    new Chart(ctx, option);
                    console.log(response);
                }
            });



        });

    </script>
@endsection
