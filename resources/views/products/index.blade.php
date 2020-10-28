@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>Products</b>
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">Add New Product<i
                        class="fa fa-plus ml-2"></i></a>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total Stocks</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stocks}}</td>
                                <td>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary py-0">
                                        view
                                    </a>
                                    <button type="button" class="btn btn-sm delete" data-toggle="modal" data-target="#deleteProduct" data-productname="{{$product->name}}"
                                        data-productid="{{ $product->id}}">
                                        <i class="fa fa-trash fa-lg text-danger"></i>
                                    </button>
                                    <form action="{{ route('products.destroy',$product->id)}}" method="post" id="{{ $product->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="deleteProduct" tabindex="-1" role="dialog" aria-labelledby="deleteProductLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProductLabel"><i class="fa fa-trash text-danger"></i> Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h5>Are you sure you want to delete this product?</h5>
                    <h5 id="productName"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.delete').click(function () {
                $('#productName').text($(this).data('productname'));
                $('#confirmDelete').data('productId',$(this).data('productid'));
            });
        });
        $('#confirmDelete').click(function () {
            $('#' + $(this).data('productId')).submit();
        });

    </script>
@endsection
