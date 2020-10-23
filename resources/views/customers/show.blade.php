@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card border-0 bg-transparent">
            <div class="card-header bg-transparent">
                <b>Customer Details</b>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">Name</div>
                    <div class="col-md-9">{{ $user->name }}</div>
                    <div class="col-md-3">Email</div>
                    <div class="col-md-9">{{ $user->email }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
