@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card ">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-end">
                <b>
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm mr-2">
                        <i class="fa fa-chevron-left"></i> back
                    </a>
                    Update Product
                </b>
            </div>

            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="newName"><b>New Product Name</b></label>
                            <input type="text" class="form-control" name="newName" id="newName" placeholder="Product Name...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="newType"><b>Select New Type</b></label>
                            <select class="form-control" name="newType">
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
                        <div class="form-group col-md-3">
                            <label for="newBrand"><b>Select New Product Brand</b></label>
                            <select class="form-control" name="newBrand" multiple>
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

                        <div class="form-group col-md-3">
                            <label for="newColor"><b>New Color</b></label>
                            <select class="form-control" name="newColor" multiple>
                                <option>Black</option>
                                <option>Blue</option>
                                <option>Brown</option>
                                <option>Greed</option>
                                <option>Orange</option>
                                <option>Purple</option>
                                <option>Red</option>
                                <option>Yellow</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="newSize"><b>Select New Available Sizes</b></label>
                            <select class="form-control" name="newSize" multiple>
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
                        <div class="form-group col-md-6">
                            <label for="newPrice"><b>New Price</b></label>
                            <input type="number" class="form-control" id="newPrice" placeholder="Product Price...">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="newStocks"><b>New Number of Stocks</b></label>
                            <input type="number" class="form-control" id="newStocks" placeholder="Total Number Of Stocks...">
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
