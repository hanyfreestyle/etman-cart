<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_customers_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('customer_id');
            $table->unsignedBiginteger('product_id');

            $table->foreign('customer_id')->references('id')
                ->on('users_customers')->onDelete('cascade');
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_customers_products');
    }
};
