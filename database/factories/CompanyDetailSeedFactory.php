<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Companydetail;
use Faker\Generator as Faker;

$factory->define(Companydetail::class, function (Faker $faker) {
    return [
        'company_name'=>$faker->name(),
        'main_address'=>$faker->address,
        'second_address'=>$faker->secondaryAddress,
        'city_name'=>$faker->city,
        'postcode'=>$faker->postcode,
        'country'=>$faker->country,
        'state/province'=>$faker->state
    ];
});
