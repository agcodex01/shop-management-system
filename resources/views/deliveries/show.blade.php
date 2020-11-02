@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card">
            <div class="card-header bg-transparent ">
                <span><a href="{{ url()->previous() }}" class="btn btn-sm btn-primary"><i class="fa fa-chevron-left mr-2"></i>back</a></span> <b><i class="fa fa-truck"></i> Deliveries Tracking</b>
            </div>

            <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p> <b>Deliveries </b>/ Orders</p>

                        <span> <strong>Total :</strong>  {{ number_format($total,2) }} </span>
                    </div>

                    <x-orders :orders="$delivery->orders"></x-orders>

            </div>
        </div>
    </div>
@endsection
