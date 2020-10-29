@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                <b>Customers List</b>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Register Date</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td>{{ $user->address}}</td>
                                <td>
                                    <a href="{{ route('customers.show', $user->id) }}" class="btn btn-primary py-0 ">view</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
