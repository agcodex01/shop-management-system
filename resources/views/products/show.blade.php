@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm mr-2">
                        <i class="fa fa-chevron-left"></i> back
                    </a>
                    Product Details
                </b>
            </div>

            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name"><b>Product Name</b></label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Product Name..." required value="{{ $product->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="brand"><b>Product Brand</b></label>
                            <select required class="form-control  @error('brand') is-invalid @enderror" id="brand"
                                name="brand">
                                @foreach (config('product.brands') as $brand)
                                    <option @if ($product->brand == $brand) @{{ selected }}
                                @endif>{{ $brand }}</option>
                                @endforeach
                            </select>
                            @error('brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="type"><b>Type</b></label>
                            <select required class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                                @foreach (config('product.types') as $type)
                                    <option @if ($product->type == $type) @{{ selected }}
                                @endif >{{ $type }}</option>
                                @endforeach
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sizes"><b>Available Sizes</b></label>
                            <select required class="form-control @error('sizes') is-invalid @enderror" id="sizes"
                                name="sizes[]" multiple>
                                @foreach (config('product.sizes') as $sizeLabel => $sizes)
                                    <optgroup label="{{ $sizeLabel }}">
                                        @foreach ($sizes as $size)
                                            @foreach ($product->sizes as $productSize)
                                                <option @if ($productSize == $size)
                                                    @{{ selected }}
                                            @endif > {{ $size }}</option>
                                        @endforeach
                                @endforeach
                                </optgroup>
                                @endforeach
                            </select>
                            @error('sizes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="color"><b>Color</b></label>
                            <select required class="form-control @error('colors') is-invalid @enderror" name="colors[]"
                                multiple>
                                @foreach (config('product.colors') as $color)
                                    @foreach ($product->colors as $productColor)
                                        <option @if ($productColor == $color) @{{ selected }} @endif > {{ $color }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                            @error('sizes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="price"><b>Price</b></label>
                            <input required type="number" class="form-control @error('price') is-invalid @enderror"
                                id="price" name="price" placeholder="Product Price..." min="1" value="{{ $product->price }}">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="stocks"><b>Number of Stocks</b></label>
                            <input required type="number" class="form-control @error('stocks') is-invalid @enderror"
                                id="stocks" name="stocks" placeholder="Total Number Of Stocks..." min="1"
                                value="{{ $product->stocks }}">
                            @error('stocks')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description"><b>Other Descriptions</b></label>
                        <textarea required type="text" class="form-control @error('description') is-invalid @enderror"
                            id="description" name="description" placeholder="Other Descriptions..." >{{ $product->description}}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>



                    <div class="submit-btn">
                        <input class="btn btn-primary" type="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
