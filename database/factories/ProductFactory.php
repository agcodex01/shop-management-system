<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->randomElement(config('product.types')),
        'brand' => $faker->randomElement(config('product.brands')),
        'colors' => $faker->randomElements(config('product.colors'),5),
        'sizes' => $faker->randomElements(config('product.sizes.Shirts/Polo/Jackets/Shorts/Jeans/Dresse/Sweater/Bra'),5),
        'price' => mt_rand(100,1000),
        'stocks' => mt_rand(10,30),
        'descriptiom' => $faker->sentence(20),
    ];
});
