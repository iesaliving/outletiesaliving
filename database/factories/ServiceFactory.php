<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $title = $faker->sentence(4);

    return [
        'name' 			   => $title,
        'slug' 			   => Str::slug($title, '-'),
        'status'           => $faker->randomElement(['GOVERNANCE','LEGALE'])
    ];
});
