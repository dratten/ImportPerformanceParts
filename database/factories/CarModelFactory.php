<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use \App\Models\CarModel;
use Faker\Generator as Faker;

$factory->define(CarModel::class, function (Faker $faker) {
    return [
        'car_brand'=> ucwords($faker->word(4)),
        'car_model'=> ucfirst($faker->word()),
        'car_code'=>strtoupper($faker->name(4)),
    ];
});
