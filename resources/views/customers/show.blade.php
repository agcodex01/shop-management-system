@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between">
                <div>
                    <a href="{{ route('customers.index') }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-chevron-left"></i> Back</a>
                    <b>Customer Details</b>
                </div>

                <a href="{{ route('customers.orders',$user->id)}}" class="btn btn-primary btn-sm">View orders <i class="fa fa-eye ml-2"></i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">Name</div>
                    <div class="col-md-9">{{ $user->name }}</div>
                    <div class="col-md-3">Email</div>
                    <div class="col-md-9">{{ $user->email }}</div>
                    <div class="col-md-3">Number</div>
                    <div class="col-md-9">{{ $user->contact_number }}</div>
                    <div class="col-md-3">Address</div>
                    <div class="col-md-9">{{ $user->address }}</div>

                </div>

            </div>
        </div>
    </div>
@endsection
