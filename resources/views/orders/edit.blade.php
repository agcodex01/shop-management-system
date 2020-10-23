@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order Update</h1>
        <ul class="list-group">
          <li class="list-group-item disabled">Id :</li>
          <li class="list-group-item">Customer Name: </li>
          <li class="list-group-item">Order Date: </li>
          <li class="list-group-item">Payment:</li>
          <li class="list-group-item">Total Amount:</li>
          <li class="list-group-item">Delivery Fee:</li>
          <li class="list-group-item">Status: Single</li>
        </ul>
        <br>
        <div class="card border-0 bg-transparent">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                <b>Product List</b>

            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
               
                            <tr>
                                <td>Shoes</td>
                                <td>130</td>
                                <td>20</td>
                                <td>2323</td>
                            </tr>
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
