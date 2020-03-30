<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\contact;
use Faker\Generator as Faker;

$factory->define(contact::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    $title  = $faker->name($gender);
    return [
    	'name' 			   => $title,
    	'address' 	       => $faker->address(),
    	'phone' 	       => $faker->phoneNumber(),
    	'fax' 	           => $faker->tollFreePhoneNumber(),
    	'email' 	       => $faker->email(),
    ];
});
