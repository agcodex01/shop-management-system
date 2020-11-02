@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-transparent d-flex justify-content-between  align-items-center">
                <b>
                    <i class="fa fa-truck"></i>
                    Deliveries Tracking

                </b>
                <a href="{{ route('deliveries.create') }}" class="btn btn-sm btn-primary ">
                    Add new Delivery <i class="fa fa-plus"></i>
                </a>
            </div>

            <div class="card-body">
                <p><b>Deliveries </b>/ Orders</p>
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
                        @foreach ($deliveries as $delivery)
                            <tr>
                                <td>{{ $delivery->dv_id}}</td>
                                <td>{{ now() }}</td>
                                <td>{{ $delivery->status }}</td>
                                <td>
                                    <a href="{{ route('deliveries.show', $delivery->id) }}"
                                        class="btn btn-primary py-0 ">view</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
