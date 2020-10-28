<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Date of Order</th>
            <th scope="col">Location</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">12</th>
            <td>Rhea Yang</td>
            <td>Oct. 21, 2020</td>
            <td class="align-self-end p-3">asd</td>
            <td class="d-inline-flex">
                <a href="{{ route('orders.show', 1) }}" class="btn btn-sm btn-primary mr-2">
                    view</a>
                <form action="#" method="post">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-sm btn-warning">complete</button>
                </form>

            </td>
        </tr>

    </tbody>
</table>
