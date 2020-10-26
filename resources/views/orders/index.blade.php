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
                    <th scope="col" >Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">12</th>
                    <td>Rhea Yang</td>
                    <td>Oct. 21, 2020</td>
                    <td>asd</td>
                    <td class="d-inline-flex">
                        <a href=""> view</a>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-secondary dropdown-toggle ml-3" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                update status
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item active" href="#">pending</a>
                                <a class="dropdown-item" href="#">confirmed</a>
                                <a class="dropdown-item" href="#">complete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('orders.show', 1) }}">Show Order</a>
        <a href="{{ route('orders.edit', 1) }}">Edit Order</a>
    </div>
@endsection
