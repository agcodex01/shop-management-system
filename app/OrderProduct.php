<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class OrderProduct extends Model
{
    protected $fillable = ['order_id','product_id','quantity','sub_total'];
    protected $collection = 'order_product';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
