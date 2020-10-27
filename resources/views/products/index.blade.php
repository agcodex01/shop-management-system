@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>Products</b>
                <a href="{{ route('products.create')}}" class="btn btn-primary btn-sm" >Add New Product<i class="fa fa-plus ml-2"></i></a>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price/Stock</th>
                        <th scope="col">Total Stocks</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>product1</td>
                        <td>60.00</td>
                        <td>105</td>
                        <td>
                          <a href="{{route('products.edit',1)}}" class = "btn btn-primary py-0">
                           view
                          </a>
                          <a href="#">
                            <i class="fa fa-trash fa-lg text-danger"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Product2</td>
                        <td>75.00</td>
                        <td>50</td>
                        <td>
                          <a href="{{route('products.edit',1)}}" class = "btn btn-primary py-0">
                            view
                          </a>
                          <a href="#">
                            <i class="fa fa-trash text-danger fa-lg "></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Product3</td>
                        <td>100.00</td>
                        <td>300</td>
                        <td>
                          <a href="{{route('products.edit',1)}}" class = "btn btn-primary py-0">
                            view
                          </a>
                          <a href="#">
                            <i class="fa fa-trash fa-lg text-danger"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
