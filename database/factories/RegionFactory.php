<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Region;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->randomElement([
            "I Tarapacá",
            "II Antofagasta",
            "III Atacama",
            "IV Coquimbo",
            "V Valparaíso",
            "VI O'Higgins",
            "VII Maule",
            "VIII Biobío",
            "IX Araucanía",
            "X Los Lagos",
            "XI Aisén",
            "XII Magallanes & Antártica",
            "Región Metropolitana",
            "XIV Los Ríos",
            "XV Arica & Parinacota",
            "XVI Ñuble",
        ])
    ];
});
