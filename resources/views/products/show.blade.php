@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <div>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">Product#</th>
          <th scope="col">Type</th>
          <th scope="col">Available Brand/s</th>
          <th scope="col">Name</th>
          <th scope="col">Color</th>
          <th scope="col">Available Size/s</th>
          <th scope="col">Price/Stock</th>
          <th scope="col">Total Stocks</th>
          <th scope="col">Other Descriptions</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>T-shirt</td>
          <td>Nike, Adidas, Puma</td>
          <td>product1</td>
          <td>Blue</td>
          <td>S, M, L</td>
          <td>60.00</td>
          <td>105</td>
          <td>100% cotton</td>
          <td><a href="#">
            <i class="fa fa-edit"></i>
            </a><a href="#">
            <i class="fa fa-trash"></i>
            </a></td>
        </tr>
      </tbody>
    </table>
        </div>
    </div>
@endsection
