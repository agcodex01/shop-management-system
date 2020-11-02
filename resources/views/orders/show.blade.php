@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>
                    <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm mr-2">
                        <i class="fa fa-chevron-left"></i> back
                    </a>
                    Order Details
                </b>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between h5  mb-3">
                    <span><i class="fa fa-building" aria-hidden="true"></i>Tikyang Company</span>
                    Date: {{ now() }}
                </div>
                <div class="row">
                    <div class="col-sm-4 ">
                        From
                        <address>
                            <strong>Tikyang Company</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            Phone: (804) 123-5432<br>
                            Email: info@almasaeedstudio.com
                        </address>
                    </div>
                    <div class="col-sm-4 ">
                        To
                        <address>
                            <strong>{{ $order->user->name }}</strong><br>
                            {{ $order->address }} <br>
                            Phone: {{ $order->user->contact_number }}<br>
                            Email: {{ $order->user->email }}
                        </address>
                    </div>
                    <br>
                    <br>
                    <div class="col-sm-4 ">
                        <div class=" bg-primary text-white mb-3 rounded p-1">
                            <b>Status: {{ $order->status }}</b>
                        </div>
                        <b>Order ID:</b> 4F3S8J<br>
                        <b>Payment Due:</b> 2/22/2014<br>
                        <b>Account:</b> 968-34567 <br>

                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Qty</th>
                            <th>Product</th>
                            <th>Serial #</th>
                            <th>Description</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        @endphp
                        @foreach ($orderDetails as $detail)
                            <tr>
                                <td>{{ $detail->quantity }}</td>
                                <td>{{ $detail->product->name }}</td>
                                <td>455-981-221</td>
                                <td>El snort testosterone trophy driving gloves handsome</td>
                                <td>$ {{ $detail->sub_total }}</td>
                            </tr>
                            @php
                            $total+=$detail->sub_total;
                            @endphp
                        @endforeach


                    </tbody>
                </table>
                <br>
                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/visa.png" alt="Visa">
                        <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/mastercard.png" alt="Mastercard">
                        <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/american-express.png"
                            alt="American Express">
                        <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/paypal2.png" alt="Paypal">

                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango
                            imeem
                            plugg
                            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                        </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <p class="lead">Amount Due : {{ now()->addWeek()->isoFormat('ddd   D:M:Y') }} </p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>${{ $total }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$ {{ $order->shipping }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$ {{ $total + $order->shipping }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                @if (!($order->status == 'completed'))
                    <button type="button" class="btn btn-primary float-right"><i class="fa fa-truck"></i> Add to
                        Delivery</button>
                    <form action="{{ route('orders.update', $order->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        @if ($order->status == 'pending')
                            <input type="hidden" name="status" value="confirmed">
                            <button type="submit" class="btn btn-success float-right" style="margin-right: 5px;">
                                <i class="fa fa-check"></i>Mark as confirm
                            </button>
                        @else
                        <button type="submit" class="btn btn-success float-right" style="margin-right: 5px;">
                            <i class="fa fa-check"></i>Mark as complete
                        </button>
                        @endif

                    </form>
                @endif

            </div>
        </div>


    </div>
    </div>

    </div>


@endsection
