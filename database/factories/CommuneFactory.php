<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commune;
use App\Region;
use Faker\Generator as Faker;

$factory->define(Commune::class, function (Faker $faker) {
    $name = $faker->sentence;
    return [
        'region_id' =>  Region::all()->random()->id,
        'name'      =>  $name
    ];
});
