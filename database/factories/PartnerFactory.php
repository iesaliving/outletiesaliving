<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Partner;
use Faker\Generator as Faker;

$factory->define(Partner::class, function (Faker $faker) {
	$gender = $faker->randomElement(['male', 'female']);
    $title  = $faker->name($gender);
    return [
    	'name' 			   => $title,
    	'phone' 	       => $faker->phoneNumber(),
    	'fax' 	           => $faker->tollFreePhoneNumber(),
    	'email' 	       => $faker->email(),
        'slug' 			   => Str::slug($title, '-'),
        'photo' 		   => $faker->imageUrl($width = 1200, $height = 400),
        'status'           => $faker->randomElement(['PARTNER','ASOCCIATE','OF COUNSEL'])
    ];
});
