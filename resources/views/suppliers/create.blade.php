@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b><a href="{{ route('suppliers.index')}}" class="btn btn-primary py-0 mr-2"> <i class="fa fa-chevron-left"></i> back</a> Add New Supplier</b>

            </div>

            <div class="card-body mt-4">
                <form class="row" action="{{ route('supplier.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="type" value="supplier">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name')}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" value="{{ old('company')}}">
                            @error('company')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 my-2">
                        <h5>Contact Info</h5>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" class="form-control @error('contact_number') is-invalid @enderror" id="number" name="contact_number" value="{{ old('contact_number')}}">
                            @error('contact_number')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address')}}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary px-5">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
