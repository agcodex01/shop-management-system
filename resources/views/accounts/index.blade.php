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
                                        <div class="e-profile">
                                            <div class="row">
                                                <div class="col-12 col-sm-auto mb-3">
                                                    <div class="mx-auto" style="width: 140px;">
                                                        <div class="d-flex justify-content-center align-items-center rounded"
                                                            style="height: 140px; background-color: rgb(233, 236, 239);">
                                                            <span
                                                                style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                                                        <p class="mb-0">@johnny.s</p>
                                                        <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                                                        <div class="mt-2">
                                                            <button class="btn btn-primary" type="button">
                                                                <i class="fa fa-fw fa-camera"></i>
                                                                <span>Change Photo</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="text-center text-sm-right">
                                                        <span class="badge badge-secondary">administrator</span>
                                                        <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
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
                                                                            <input class="form-control" type="text"
                                                                                name="name" placeholder="John Smith"
                                                                                value="John Smith">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Username</label>
                                                                            <input class="form-control" type="text"
                                                                                name="username" placeholder="johnny.s"
                                                                                value="johnny.s">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input class="form-control" type="text"
                                                                                placeholder="user@example.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <div class="form-group">
                                                                            <label>About</label>
                                                                            <textarea class="form-control" rows="5"
                                                                                placeholder="My Bio"></textarea>
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
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control" type="password"
                                                                            id="currentpass" placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="current"
                                                                        class="col-sm-3 col-form-label">New Password
                                                                        </label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control" type="password"
                                                                            id="newpass" placeholder="••••••">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="current"
                                                                        class="col-sm-3 col-form-label">Confirm Password
                                                                        </label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control" type="password"
                                                                            id="confirmpass" placeholder="••••••">
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
