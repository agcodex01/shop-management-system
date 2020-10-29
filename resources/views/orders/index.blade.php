@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>
                    Orders
                </b>
            </div>
            <div class="card-body">

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link w-25 disabled" >Status</a>
                        <a class="nav-item nav-link w-25 active" id="pending-tab" data-toggle="tab" href="#pending"
                            role="tab" aria-controls="pending" aria-selected="true">Pending</a>
                        <a class="nav-item nav-link w-25" id="confirmed-tab" data-toggle="tab" href="#confirmed"
                            role="tab" aria-controls="confirmed" aria-selected="false">Confirmed</a>
                        <a class="nav-item nav-link w-25" id="completed-tab" data-toggle="tab" href="#completed"
                            role="tab" aria-controls="completed" aria-selected="false">Complete</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                        <x-orders :orders="$orders['pending']"></x-orders>
                        {{ $orders['pending']->links()}}
                    </div>
                    <div class="tab-pane fade" id="confirmed" role="tabpanel" aria-labelledby="confirmed-tab">
                        <x-orders :orders="$orders['confirmed']"></x-orders>
                        {{ $orders['confirmed']->links()}}
                    </div>
                    <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                        <x-orders :orders="$orders['completed']"></x-orders>
                        {{ $orders['completed']->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
