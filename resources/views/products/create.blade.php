@extends('layouts.app')

@section('content')
<style>
    .form-group{
        width: 80%;
        margin: 0 auto;
       
    }
    .form-control{
        width: 100%;
        padding-left: 2%;
    }
    .submit-btn{
        padding-top: 20px;
        width: 10%;
        margin: 0 auto;
    }
    
</style>
    <div class="container">
        <h1>Product Create</h1>
    </div>
    
    <form>
    <div class="form-group">
        <label for="productName">Product Name</label>
        <input type="text" class="form-control" id="productName" placeholder="Product Name...">
    </div>
    <div class="form-group">
        <label for="productColor">Color/s</label>
        <input type="text" class="form-control" id="productColor" placeholder="Product Color/s...">
    </div>
    <div class="form-group">
        <label for="productSize">Available Sizes</label>
        <input type="text" class="form-control" id="productSize" placeholder="Product Size/s...">
    </div>
    <div class="form-group">
        <label for="productBrand">Brand/s</label>
        <input type="text" class="form-control" id="productBrand" placeholder="Product Brand/s...">
    </div>
    <div class="form-group">
        <label for="otherDescription">Other Descriptions</label>
        <input type="text" class="form-control" id="otherDescription" placeholder="Product Other Descriptions...">
    </div>
    <div class="form-group">
        <label for="productPrice">Price/s</label>
        <input type="text" class="form-control" id="productPrice" placeholder="Product Prize/s...">
    </div>
    <div class="form-group">
        <label for="stocks">Number of Stocks</label>
        <input type="text" class="form-control" id="stocks" placeholder="Total Number Of Stocks...">
    </div>
    <div class="submit-btn">
    <input class="btn btn-primary" type="submit" value="Submit">
    </div>
    </form>

    
@endsection
