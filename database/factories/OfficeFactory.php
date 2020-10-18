<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'code' => $faker->code,
        'city' => $faker->city,
        'phone' => $faker->phone,
        'address1' => $faker->address1,
        'address2' => $faker->address2,
        'state' => $faker->state,
        'country' => $faker->country,
        'postalcode' => $faker->postalcode,
        'temitory' => $faker->temitory,
    ];
});
