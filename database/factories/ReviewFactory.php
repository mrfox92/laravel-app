<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use App\Service;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'service_id'    =>  Service::all()->random()->id,
        'rating'        =>  $faker->randomFloat(2, 1, 5)
    ];
});
