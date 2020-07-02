<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetPaymentsTableForeignConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('payments', function (Blueprint $table) {
        //     $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade')->change();
        //     $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade')->change();
        //     $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade')->change();
        //     $table->foreign('company_id')->references('company_id')->on('companydetails')->onDelete('cascade')->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['product_id']);
        $table->dropForeign(['customer_id']);
        $table->dropForeign(['category_id']);
        $table->dropForeign(['company_id']);
    }
}
