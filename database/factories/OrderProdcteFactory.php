<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderProdcte;
use Faker\Generator as Faker;

$factory->define(OrderProdcte::class, function (Faker $faker) {
    return [
        'prodctescode' => $faker->prodctescode,
        'qty' => $faker->qty,
        'priceeach' => $faker->priceeach,

        'order_id' => factory(App\Order::class),
    ];
});
