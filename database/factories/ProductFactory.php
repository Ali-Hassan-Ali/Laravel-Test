<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'code' => $faker->code,
        'productlineID' => $faker->productlineID,
        'scale' => $faker->scale,
        'vendor' => $faker->vendor,
        'pdtDescription' => $faker->pdtDescription,
        'qtylnstock' => $faker->qtylnstock,
        'Buyprice' => $faker->Buyprice,
        'msrp' => $faker->msrp,

        'coustomer_id' => factory(App\Productline::class),
        'remember_token' => Str::random(10),
    ];
});
