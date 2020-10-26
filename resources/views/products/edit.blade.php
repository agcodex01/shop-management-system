@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <h1>Edit Product</h1>
            </div>

            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name"><b>New Product Name</b></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Product Name...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="type"><b>Select New Type</b></label>
                            <select class="form-control" name="type">
                                <option>Bra</option>
                                <option>Cap</option>
                                <option>Coat</option>
                                <option>Dress</option>
                                <option>Flip-flops</option>
                                <option>Gloves</option>
                                <option>Hat</option>
                                <option>High Heels</option>
                                <option>Hoodies</option>
                                <option>Gyro Clothes</option>
                                <option>Jeans</option>
                                <option>Polo-shirt</option>
                                <option>Sandals</option>
                                <option>Scarf</option>
                                <option>Shirt</option>
                                <option>Shoes</option>
                                <option>Short</option>
                                <option>Skirt</option>
                                <option>Socks</option>
                                <option>Suit</option>
                                <option>Sunglasses</option>
                                <option>Sweater</option>
                                <option>Swimsuit</option>
                                <option>Tie</option>
                                <option>T-shirt</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="brand"><b>Select New Product Brand</b></label>
                            <select class="form-control" name="brand" multiple>
                                <option>Adidas</option>
                                <option>Calvin Klein</option>
                                <option>George</option>
                                <option>Guess</option>
                                <option>G-Star</option>
                                <option>Hollister</option>
                                <option>Lucky Brand</option>
                                <option>Nike</option>
                                <option>Patagonia</option>
                                <option>Ralph & Lauren</option>
                                <option>TU</option>
                                <option>Your M&S</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="size"><b>Select New Available Sizes</b></label>
                            <select class="form-control" name="size" multiple>
                            <optgroup label="Shirts/Polo/Jackets/Shorts/Jeans/Dresse/Sweater/Bra">
                                <option>XXS</option>
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XL</option>
                            </optgroup>    
                            <optgroup label="Shoes/Sandals/High Heels/Flip-Flops">
                                <option>4"inches</option>
                                <option>4.25"inches</option>
                                <option>4.5"inches</option>
                                <option>4.75"inches</option>
                                <option>5"inches</option>
                                <option>5.25"inches</option>
                                <option>5.5"inches</option>
                                <option>5.75"inches</option>
                                <option>6"inches</option>
                                <option>6.25"inches</option>
                                <option>6.5"inches</option>
                                <option>6.75"inches</option>
                            </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="color"><b>New Color</b></label>
                            <input type="text" class="form-control" name="color" id="color" placeholder="Product Color...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="price"><b>New Price</b></label>
                            <input type="text" class="form-control" id="price" placeholder="Product Price...">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="stocks"><b>New Number of Stocks</b></label>
                            <input type="number" class="form-control" id="stocks" placeholder="Total Number Of Stocks...">
                        </div>
                    </div>

                    <label for="description"><b>Other New Descriptions</b></label>
                    <textarea type="text" class="form-control" id="description" placeholder="Other Descriptions..."></textarea>
                    <br>
                    <div class="submit-btn">
                        <input class="btn btn-primary" type="submit" value="Update Product">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
