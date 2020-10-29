<table class="table table-responsive" style="table-layout:fixed!important;">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Date_of_Order</th>
            <th scope="col">Address</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{ $order->user->name }}</td>
                <td>Oct. 21, 2020</td>
                <td   class="text-truncate">{{ $order->address }}</td>
                <td class="d-inline-flex">
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-primary mr-2">
                        view</a>
                    @if ($order->status != 'completed')
                        <form action="#" method="post">
                            @csrf
                            @method('PUT')
                            @if ($order->status == "pending")
                                <input type="hidden" name="status" value="confirmed">
                                <button class="btn btn-sm btn-success">confirm</button>
                            @else
                                <input type="hidden" name="status" value="completed">
                                <button class="btn btn-sm btn-success">complete</button>
                            @endif

                        </form>
                    @endif


                </td>
            </tr>
        @endforeach

    </tbody>
</table>
