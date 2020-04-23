<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->randomElement(['Venta', 'Compra', 'Arriendo', 'Viajes', 'Beneficencia', 'Compartir', 'Empleos', 'Ofertas', 'Grupos', 'Liquidaciones']),
        'description'   =>  $faker->sentence
    ];
});
