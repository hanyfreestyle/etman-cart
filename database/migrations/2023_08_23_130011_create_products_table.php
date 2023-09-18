<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable();

            $table->integer('ref_code')->nullable()->default(null);
            $table->decimal('price', 10, 6)->nullable()->default(null);
            $table->decimal('discount_price', 10, 6)->nullable()->default(null);
            $table->decimal('qty', 10, 6)->nullable();

            $table->integer('pro_shop')->nullable()->default(1);
            $table->integer('pro_web')->nullable()->default(1);
            $table->integer('pro_web_data')->nullable()->default(0);
            $table->string("photo")->nullable();
            $table->string("photo_thum_1")->nullable();
            $table->boolean("is_active")->default(true);
            $table->boolean("is_archived")->default(false);
            $table->timestamps();

//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
