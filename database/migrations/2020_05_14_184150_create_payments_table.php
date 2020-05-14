<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->double('product_price');
            $table->int('product_id');
            $table->int('customer_id');
            $table->string('customer_name');
            $table->double('total_price');
            $table->int('product_id');
            $table->boolean('payment_status');
            $table->string('product_name');
            $table->int('category_id');
            $table->int('company_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
