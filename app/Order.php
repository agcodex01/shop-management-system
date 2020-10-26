<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

}
