<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $category = Category::all()->pluck('category_id')->take(rand(1,10));
    return [
        'product_name'=>$faker->name(),
        'product_specifications'=>$faker->text(20),
        'product_price'=>rand(10,20000),
        'product_category'=>$faker->name(10),
        'category_id'=> $category[0],
    ];
});
