<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seller;
use Faker\Provider\Image;
use Faker\Generator as Faker;

$factory->define(Seller::class, function (Faker $faker) {
    return [
        'user_id'           =>  null,
        'title'             =>  $faker->company,
        'description'       =>  $faker->sentence,
        'bio'               =>  $faker->paragraph,
        'website_url'       =>  $faker->url,
        'contact_number'    =>  $faker->e164PhoneNumber,
        'address'           =>  $faker->streetAddress,
        'contact_email'     =>  $faker->unique()->safeEmail,
        'picture'           =>  Image::image(storage_path() . '/app/public/sellers', 300, 300, 'tech', false),
        'banner'            =>  Image::image(storage_path() . '/app/public/banners', 1000, 400, 'nature', false),
    ];
});
