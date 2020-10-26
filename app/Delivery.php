<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class Delivery extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
