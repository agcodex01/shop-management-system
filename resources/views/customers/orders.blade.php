@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent">
                <a href="{{ route('customers.index') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-chevron-left"></i> Back</a>
                <b>Customer orders</b>

            </div>
            <div class="card-body">
                <x-orders :orders="$user->orders"></x-orders>

            </div>
        </div>
    </div>
@endsection
