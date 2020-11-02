@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent">
                <a href="{{ route('deliveries.index') }}" class="btn btn-primary btn-sm mr-2">
                    <i class="fa fa-chevron-left"></i> back
                </a>
                <b>Create Delivery</b>

            </div>
            <div class="card-body">
                <b>Order(s) to be deliver</b>
                <hr>
                <form id="deliveryForm" action="{{ route('deliveries.store')}}" method="post">
                    @csrf
                    <table class="table">
                        <tr>
                            <th><input type="checkbox"  class="mr-2" id="selectAll">All</th>
                            <th>Location to deliver</th>
                            <th>Total Items</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($orders as  $order)
                            <tr>
                                <td><input type="checkbox" class="order" name="orders[]" value="{{$order->id}}"></td>
                                <td>{{ $order->address}}</td>
                                <td>10</td>
                                <td><a href="{{route('orders.show',$order->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> view</a></td>
                            </tr>
                        @endforeach
                    </table>

                    <hr>
                    <div class="text-right">
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Confirm Delivery</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#selectAll').change(function() {
                $isAllChecked = $(this).prop('checked')
                $('.order').each(function(index, element) {
                    $(this).prop('checked', $isAllChecked)
                });
            });
            $('.order').click(function() {
                $('#selectAll').prop('checked', false)
                if ($selectedOrder()== $('.order').length) {
                    $('#selectAll').prop('checked', true)
                }
            });
            $('#deliveryForm').submit(function (e) {



                if ($selectedOrder() < 1) {
                    e.preventDefault();
                    alert('Select order to Deliver')
                }

            });

            $selectedOrder = ()=>{
                $totalChecked = 0;
                $('.order').each(function(index, element) {
                    if ($(this).prop('checked')) {
                        $totalChecked++
                    }
                });
                return $totalChecked
            }
        });

    </script>
@endsection
