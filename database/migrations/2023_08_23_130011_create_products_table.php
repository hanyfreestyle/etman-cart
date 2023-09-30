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
         //   $table->unsignedBigInteger('category_id')->nullable(); float

            $table->integer('ref_code')->nullable()->default(null);

            $table->float('price')->nullable()->default(null);
            $table->float('sale_price')->nullable()->default(null);
            $table->integer('qty_left')->nullable()->default(null);
            $table->integer('qty_max')->nullable()->default(null);
            $table->string("unit")->nullable();

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
