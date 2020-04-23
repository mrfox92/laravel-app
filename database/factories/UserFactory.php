<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Faker\Provider\Image;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $name = $faker->name;
    $last_name = $faker->lastName;
    $slug = $name . " " . $last_name;
    return [
        'name' => $faker->name,
        'role_id'   =>  Role::all()->random()->id,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('test1234'), // password
        'remember_token' => Str::random(10),
        'avatar'   =>  Image::image(storage_path() . '/app/public/users', 200, 200, 'people', false),
    ];
});
