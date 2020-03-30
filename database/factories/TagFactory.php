<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Tag::class, function (Faker $faker) {

	$title = $faker->unique()->word(5);

    return [
    	'user_id' => 1,
        'name'    => $title,
        'slug'    => Str::slug($title, '-')
    ];
});
