<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(50, 1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2, 25),
        'user_id' => function(){
        	return App\User::all()->random();
        }
    ];
});
