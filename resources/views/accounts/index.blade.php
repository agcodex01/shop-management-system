@extends('layouts.app')

@section('accounts')
    <div class="container">
        <div class="card bg-transparent border-0">
            <div class="card-header bg-white rounded mx-3">
                <i class="fa fa-user-circle"></i> <strong>ADMIN</strong>
            </div>
            <div class="card-body ">
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('accounts.update', $user->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="e-profile">
                                                <div class="row">
                                                    <div class="col-12 col-sm-auto mb-3">
                                                        <div class="mx-auto" style="width: 140px;">
                                                            <div class="d-flex justify-content-center align-items-center rounded rounded-circle"
                                                                style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                <img width="100%" height="140" id="profileImage" src="{{ $user->image_url}}"
                                                                    alt="Profile Image" class="rounded-circle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $user->name }}</h4>
                                                            <p class="mb-0">{{ $user->username }}</p>
                                                            <div class="text-muted"><small>Last seen 2 hours ago</small>
                                                            </div>
                                                            <div class="mt-2">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span
                                                                            class="input-group-text bg-primary text-white"><i
                                                                                class="fa fa-fw fa-camera"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="imageUrl"
                                                                        name="image_url" placeholder="Image url ...."
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1">
                                                                        @error('image_url')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message}}</strong>
                                                                            </span>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center text-sm-right">
                                                            <span class="badge badge-secondary">administrator</span>
                                                            <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"><a href="" class="active nav-link">Settings</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content pt-3">
                                                    <div class="tab-pane active">
                                                        <form class="form" novalidate="">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Full Name</label>
                                                                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                                                    name="name" value="{{ $user->name }}">
                                                                                    @error('name')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Username</label>
                                                                                <input class="form-control @error('username') is-invalid @enderror" type="text"
                                                                                    value="{{ $user->username }}"
                                                                                    name="username">
                                                                                    @error('username')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Email</label>
                                                                                <input class="form-control @error('email') is-invalid @enderror" type="enail"
                                                                                    value="{{ $user->email }}" name="email"
                                                                                    placeholder="user@example.com">
                                                                                    @error('email')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Number</label>
                                                                                <input class="form-control @error('contact_number') is-invalid @enderror" type="text"
                                                                                    value="{{ $user->contact_number }}"
                                                                                    name="contact_number">
                                                                                    @error('contact_number')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Address</label>
                                                                                <input class="form-control @error('address') is-invalid @enderror" type="text"
                                                                                    value="{{ $user->address }}"
                                                                                    name="address">
                                                                                    @error('address')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6 mb-3 col-md-12">
                                                                    <div class="mb-3"><b>Change Password</b></div>


                                                                    <div class="form-group row">
                                                                        <label for="current"
                                                                            class="col-sm-3 col-form-label">Current
                                                                            Password</label>
                                                                        <div class="col-sm-9 form-group">
                                                                            <input class="form-control @error('currentPassword') is-invalid @enderror" type="password"
                                                                                name="currentPassword" id="currentpass"
                                                                                placeholder="••••••">
                                                                            @error ('currentPassword')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{  $message  }}</strong>
                                                                            </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="current"
                                                                            class="col-sm-3 col-form-label">New Password
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                                                                id="newpass" placeholder="••••••"
                                                                                name="password">
                                                                                @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="current"
                                                                            class="col-sm-3 col-form-label">Confirm Password
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input class="form-control" type="password"
                                                                                id="confirmpass" placeholder="••••••"
                                                                                name="password_confirmation">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button class="btn btn-primary" type="submit">Save
                                                                        Changes</button>
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title font-weight-bold">Support</h6>
                                        <p class="card-text">Get fast, free help from our friendly assistants.</p>
                                        <button type="button" class="btn btn-primary">Contact Us</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#imageUrl').change(function() {

                $('#profileImage').attr('src', $(this).val());

            });


        });

    </script>
@endsection
