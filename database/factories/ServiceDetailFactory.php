<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceDetail;
use Faker\Generator as Faker;

$factory->define(ServiceDetail::class, function (Faker $faker) {
   $title = $faker->sentence(4);

    return [
        'service_id' 	   => rand(1,20),
        'title' 		   => $title,
        'body' 			   => $faker->text(500),
        'lang'             => $faker->randomElement(['IT', 'EN'])
    ];
});
