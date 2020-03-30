<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Partnerdetail;
use Faker\Generator as Faker;

$factory->define(Partnerdetail::class, function (Faker $faker) {
     $title = $faker->sentence(4);

    return [
        'partner_id' 	   => rand(1,20),
        'excerpt' 		   => $faker->text(200),
        'biography' 	   => $faker->text(500),
        'lang'             => $faker->randomElement(['IT', 'EN'])
    ];
});
