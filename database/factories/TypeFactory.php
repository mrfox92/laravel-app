<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->randomElement(['Servicio','Iniciativa', 'Evento', 'Convocatoria']),
        'description'   =>  $faker->sentence
    ];
});
