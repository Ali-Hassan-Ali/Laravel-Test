<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'CustomerID' => $faker->CustomerID,
        'Orderdata' => $faker->Orderdata,
        'requireddata' => $faker->requireddata,
        'shippeddata' => $faker->shippeddata,
        'status' => $faker->status,
        'Comments' => $faker->Comments,

        'coustomer_id' => factory(App\Coustomer::class),
    ];
});
