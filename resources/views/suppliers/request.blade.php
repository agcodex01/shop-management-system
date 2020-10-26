@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-primary py-0 mr-2"> <i
                            class="fa fa-chevron-left"></i> back</a>
                    Request Product
                </b>

            </div>

            <div class="card-body mt-4">
                <div class="alert alert-primary border-right-0 border-top-0  border-bottom-0 border-primary " role="alert">
                    <i class="fa fa-info-circle"></i> Create message that will send to  <b>{{ Str::lower($user->company) }} company</b> via email. Write the product(s) you want request
                    from the supplier.
                </div>
                <form class="row" action="{{ route('supplier.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject"
                                name="subject" value="Request Product" >
                            @error('subject')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ $user->email }}" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror" id="company"
                                name="company"  value="{{ $user->company }}">
                            @error('company')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 my-2 h6">
                        Message content
                        <hr>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea type="text" class="form-control @error('message') is-invalid @enderror" id="message"
                                rows="5"
                                cols="10"
                                name="message">
                            </textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary px-4"><i class="fa fa-paper-plane-o mr-2"></i> Send</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
