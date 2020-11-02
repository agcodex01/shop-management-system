@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-primary btn-sm mr-2"> <i
                            class="fa fa-chevron-left"></i> back</a>
                    Supplier Details
                </b>
                <a href="{{ route('suppliers.request', $user) }}" class="btn btn-primary py-0"> Request product <i
                        class="fa fa-plus"></i> </a>
            </div>
            <div class="card-body">
                <form action="{{ route('suppliers.update',$user)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="company" class="col-sm-3 col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('company') is-invalid @enderror" name="company"  id="company" value="{{ $user->company}}">
                            @error('company')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Contact person</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $user->name}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Contact email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  id="email" value="{{ $user->email}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="number" class="col-sm-3 col-form-label">Contact number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" id="number" value="{{ $user->contact_number}}">
                            @error('contact_number')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ $user->address}}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary px-4"><i class="fa fa-floppy-o mr-2"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
