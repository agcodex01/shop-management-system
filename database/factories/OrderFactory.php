<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'total' =>90,
        'shipping' => 50,
        'address' => $faker->address,
        'delivery_time' => $faker->time(),
        'delivery_date' => $faker->date(),
        'customer_message' => $faker->sentence(10),
        'user_id' => factory(User::class)->state('customer')->create()
    ];
});

$factory->state(Order::class,'pending',[
    'status' => 'pending'
]);

$factory->state(Order::class,'confirmed',[
    'status' => 'confirmed'
]);

$factory->state(Order::class,'completed',[
    'status' => 'completed'
]);
