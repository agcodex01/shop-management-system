@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent">
                <b>Customer Details</b>
                <a class="btn btn-primary btn-sm ml-2">View orders <i class="fa fa-eye"></i></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">Name</div>
                    <div class="col-md-9">{{ $user->name }}</div>
                    <div class="col-md-3">Email</div>
                    <div class="col-md-9">{{ $user->email }}</div>
                    <div class="col-md-3">Number</div>
                    <div class="col-md-9">{{ $user->number }}</div>
                    <div class="col-md-3">Address</div>
                    <div class="col-md-9">{{ $user->address }}</div>

                </div>
                <a href="{{ route('customers.index') }}" class="btn btn-sm btn-primary mt-2">
                   <i class="fa fa-chevron-left"></i> Back</a>
            </div>
        </div>
    </div>
@endsection
