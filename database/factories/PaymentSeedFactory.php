<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use App\Models\Companydetail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    
    $user = User::pluck('user_id')->take(rand(1,10));
    $category = Category::pluck('category_id')->take(rand(1,10));
    $company =  Companydetail::pluck('company_id')->take(rand(1,10));
    $product = Product::pluck('product_id')->take(rand(1,10));
   

    return [
        'customer_id'=> $user[0],
        'product_id'=>$product[0],
        'payment_status'=>true,
        'category_id'=>$category[0],
        'company_id'=>$company[0]

    ];
});
