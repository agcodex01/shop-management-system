<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\Product;
use App\OrderProduct;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Order::class, function (Faker $faker) {
    $code = Str::upper(Str::random(3));
    return [
        'total' => mt_rand(100,10000),
        'shipping' => mt_rand(10,1000),
        'address' => $faker->address,
        'delivery_time' => $faker->time(),
        'delivery_date' => $faker->date(),
        'customer_message' => $faker->sentence(10),
        'user_id' => factory(User::class)->state('customer')->create(),
        'ord_id' => 'ORD-'. $code.'-'.date('Y-md-His'),
        'updated_at' => now()->addWeek()
    ];
});

$factory->state(Order::class,'pending',[
    'status' => 'pending'
]);

$factory->afterCreatingState(Order::class, 'pending', function ($order) {
   $products = factory(App\Product::class,5)->create();
   foreach($products as $product){
    $quantity = mt_rand(1,10);
       OrderProduct::create([
           'order_id' => $order->id,
           'product_id' => $product->id,
           'quantity' => $quantity,
           'sub_total' => $quantity * $product->price
       ]);

   }
});

$factory->state(Order::class,'confirmed',[
    'status' => 'confirmed',
]);

$factory->afterCreatingState(Order::class, 'confirmed', function ($order) {
    $products = factory(App\Product::class,5)->create();
    foreach($products as $product){
     $quantity = mt_rand(1,10);
        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'sub_total' => $quantity * $product->price
        ]);

    }
 });

$factory->state(Order::class,'completed',[
    'status' => 'completed'
]);
$factory->afterCreatingState(Order::class, 'completed', function ($order) {
    $products = factory(App\Product::class,5)->create();
    foreach($products as $product){
     $quantity = mt_rand(1,10);
        OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'sub_total' => $quantity * $product->price
        ]);

    }
 });


