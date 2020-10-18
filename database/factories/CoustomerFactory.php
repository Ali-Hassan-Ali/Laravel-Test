<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coustomer;
use Faker\Generator as Faker;

$factory->define(Coustomer::class, function (Faker $faker) {
    return [
    	'salesRepEmployeeNum' 		=> $faker->salesRepEmployeeNum,
    	'name' 		    => $faker->name,
    	'lastname' 		=> $faker->lastname,
    	'firstname' 	=> $faker->firstname,
    	'phone' 		=> $faker->phone,
    	'address1' 		=> $faker->address1,
    	'address2' 		=> $faker->address2,
    	'city' 		    => $faker->city,
    	'stale' 		=> $faker->stale,
    	'country' 		=> $faker->country,
    	'CreditLimit' 	=> $faker->CreditLimit,
    	'PostalCode' 	=> $faker->PostalCode,
    ];
});
