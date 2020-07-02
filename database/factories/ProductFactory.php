<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use App\Models\Product;
use App\Models\CarModel;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $category = Category::all()->pluck('category_id')->take(rand(1,10));
    $model = CarModel::all()->pluck('car_id')->take(5);
    $product_images = glob(public_path() . '/images/home/product*');
    return [
        'product_name'=> ucwords($faker->word($nd = 3, $variableNbwords = true)),
        'product_specifications'=>$faker->text(20),
        'product_price'=>rand(10,20000),
        'category_id'=> $category[0],
        'product_rating' => rand(1, 5),
        'product_image' => '/images/home/' . basename($product_images[rand(0, count($product_images) - 1)]),
        'car_id' => $model[rand(0, 4)],
    ];
});
