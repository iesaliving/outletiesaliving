<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\PostDetail::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        'post_id' 		   => rand(1,50),
        'title' 		   => $title,
        'excerpt' 		   => $faker->text(200),
        'body' 			   => $faker->text(500),
        'lang'             => $faker->randomElement(['IT', 'EN'])
    ];

});
