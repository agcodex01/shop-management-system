@extends('layouts.app')

@section('content')

    
    
    <div class="container">
        <h1>Orders index</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Date of Order</th>
      <th scope="col">Location</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">12</th>
      <td>Rhea Yang</td>
      <td>Oct. 21, 2020</td>
      <td>Talamban</td>
      <td><a href = ""><i class="fa fa-eye " ></i><a/>
      <select name="status" id="">
          <option value="pending">pending</option>
          <option value="ordered">Ordered</option>
          <option value="complete">Complete</option>
      </select>          
    </tr>
  </tbody>
</table>
        <a href="{{ route('orders.show',1)}}">Show Order</a>
        <a href="{{ route('orders.edit',1)}}">Edit Order</a>
    </div>
@endsection
