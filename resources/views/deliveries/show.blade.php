@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                <b><i class="fa fa-truck"></i> Deliveries Tracking</b>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#orders"  aria-expanded="false" aria-controls="orders">Orders</button>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#supplies"  aria-expanded="false" aria-controls="supplies">Supplies</button>
                </div>
            </div>

            <div class="card-body">
                <div class="collapse show" id="orders">
                    <p> <b>Deliveries </b>/ Orders</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Delivery ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>DV-9889-09</td>
                                <td>{{ now() }}</td>
                                <td>Pending</td>
                                <td>
                                    <a href="#!" class="btn btn-primary py-0 ">view</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="collapse" id="supplies">
                    <p> <b>Deliveries </b>/ Supplies</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Delivery ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Deliver from</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>DV-9889-09</td>
                                <td>{{ now() }}</td>
                                <td>Nasipit Talamban Cebu City</td>
                                <td>Pending</td>
                                <td>
                                    <a href="#!" class="btn btn-primary py-0 ">view</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
