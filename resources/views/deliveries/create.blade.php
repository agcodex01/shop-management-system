@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent">
                <b>Customer Details</b>
                <a class="btn btn-primary btn-sm ml-2">View orders <i class="fa fa-eye"></i></a>
            </div>
            <div class="card-body">
                <b>Order(s) to be deliver</b>
                <hr>
                <table class="table">
                    <tr>
                        <th>Select</th>
                        <th>Orders</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="orders[]" id=""></td>
                        <td>Orders 1</td>
                    </tr>
                </table>



            </div>
        </div>
    </div>
@endsection
