<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;

$factory->define(App\Post::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        'user_id' 		   => 1,
        'name' 			   => $title,
        'author_id'       => rand(1,10),
        'slug' 			   => Str::slug($title, '-'),
        'publication_date' => Carbon::now(),
        'file' 			   => $faker->imageUrl($width = 1200, $height = 400),
        'type'             => $faker->randomElement(['NEWS', 'APPROFONDIMENTI']),
        'status'           => $faker->randomElement(['DRAFT', 'PUBLISHED'])
    ];

});
