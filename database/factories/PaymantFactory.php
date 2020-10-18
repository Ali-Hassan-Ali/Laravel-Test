<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paymant;
use Faker\Generator as Faker;

$factory->define(Paymant::class, function (Faker $faker) {
    return [
        'chechknum' => $faker->chechknum,
        'paymantsdata' => $faker->paymantsdata,
        'amount' => $faker->amount,

        'coustomer_id' => factory(App\Coustomer::class),
    ];
});
