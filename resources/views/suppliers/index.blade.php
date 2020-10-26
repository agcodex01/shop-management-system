@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>Supplier List</b>
                <a href="{{ route('supplier.create')}}" class="btn btn-primary btn-sm" >add new
                    supplier <i class="fa fa-plus ml-2"></i></a>

            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->company}}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->number}}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    <a href="{{ route('supplier.show', $user->id) }}" class="btn btn-primary py-0 ">view</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
