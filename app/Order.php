<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class Order extends Model
{
    protected $fillable = [
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function orderProduct()
    {
        return $this->hasMany(OrderProduct::class);
    }

}
