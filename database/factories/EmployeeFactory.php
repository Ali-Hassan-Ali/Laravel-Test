<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'officecode' => $faker->officecode,
        'reportsto' => $faker->reportsto,
        'lastname' => $faker->lastname,
        'firdtname' => $faker->firdtname,
        'extension' => $faker->extension,
        'jobtitle' => $faker->jobtitle,

        'coustomer_id' => factory(App\Coustomer::class),
    ];
});
