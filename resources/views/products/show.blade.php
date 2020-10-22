@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Color/s</th>
      <th scope="col">Available Sizes</th>
      <th scope="col">Brand/s</th>
      <th scope="col">Other Descriptions</th>
      <th scope="col">Price/Stock</th>
      <th scope="col">Total Stocks</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>product1</td>
      <td>Blue, Maroon, Black</td>
      <td>18",25",28"</td>
      <td>Nike, Adidas, Puma</td>
      <td>These are chosen products. Durable and water resistant.</td>
      <td>60.00</td>
      <td>105</td>
      <td><a href="#">
      <i class="fa fa-eye"></i>
        </a><a href="#">
        <i class="fa fa-edit"></i>
        </a><a href="#">
        <i class="fa fa-trash"></i>
        </a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Product2</td>
      <td>Blue, Maroon, Black</td>
      <td>18",25",28"</td>
      <td>Nike, Adidas, Puma</td>
      <td>These are chosen products. Durable and water resistant.</td>
      <td>75.00</td>
      <td>50</td>
      <td><a href="#">
      <a href="#">
      <i class="fa fa-eye"></i>
        </a>
        </a><a href="#">
        <i class="fa fa-edit"></i>
        </a><a href="#">
        <i class="fa fa-trash"></i>
        </a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Product3</td>
      <td>Blue, Maroon, Black</td>
      <td>18",25",28"</td>
      <td>Nike, Adidas, Puma</td>
      <td>These are chosen products. Durable and water resistant.</td>
      <td>100.00</td>
      <td>300</td>
      <td><a href="#">
      <a href="#">
      <i class="fa fa-eye"></i>
        </a>
        </a><a href="#">
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
