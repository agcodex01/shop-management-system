<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'type' , 'brand', 'colors',
        'sizes' , 'price', 'stocks', 'description'
    ];

    protected $casts = [
        'colors' => 'array',
        'sizes' => 'array'
    ];

}
