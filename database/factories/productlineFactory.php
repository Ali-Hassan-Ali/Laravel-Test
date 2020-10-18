<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Productline;
use Faker\Generator as Faker;

$factory->define(Productline::class, function (Faker $faker) {
    return [

        'descimText' => $faker->mimeType,
        'descimHtml' => $faker->realText(),
        'image' => $faker->realText(),
//        'genre_id' => function () {
//            // Get random genre id
//            return App\Genre::inRandomOrder()->first()->id;
//        },
    ];
});
