<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class Delivery extends Model
{
    protected $fillable = [
        'status', 'dv_id'
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
