<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->text('product_specifications');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('car_id');
            $table->float('product_price');
            $table->integer('product_rating');
            $table->text('product_image');

            //category_id foreign key
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');

            //car_id foreign key
            $table->foreign('car_id')->references('car_id')->on('car_models')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
