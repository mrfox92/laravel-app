<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use App\Seller;
use App\Category;
use App\Commune;
use Faker\Generator as Faker;
use Faker\Provider\Image;

$factory->define(Service::class, function (Faker $faker) {
    
    $name = $faker->sentence;
    $description = $faker->paragraph;
    $service_type = $faker->randomElement([Service::SERVICE, Service::INICIATIVE, Service::EVENT, Service::CONVOCATORY]);
    $status = $faker->randomElement([Service::PUBLISHED, Service::PENDING, Service::REJECTED]);
    $av_status = $faker->randomElement([Service::AVAILABLE, Service::UNDERWAY, Service::FINISHED]);

    return [
        'seller_id'     =>  Seller::all()->random()->id,
        'category_id'   =>  Category::all()->random()->id,  
        'commune_id'    =>  Commune::all()->random()->id,
        'service_type'  =>  $service_type,
        'name'          =>  $name,
        'description'   =>  $description,
        'slug'          =>  Str::slug($name, '-'),
        'picture'       =>  Image::image(storage_path() . '/app/public/services', 600, 350, 'tech', false),
        'status'        =>  $status,
        'av_status'     =>  $av_status
    ];
});
