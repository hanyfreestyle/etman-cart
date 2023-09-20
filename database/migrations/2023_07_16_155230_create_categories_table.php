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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('cat_shop')->default(1);
            $table->integer('cat_web')->default(0);
            $table->integer('cat_web_data')->default(0);
            $table->string("photo")->nullable();
            $table->string("photo_thum_1")->nullable();
            $table->string("icon")->nullable();
            $table->boolean("is_active")->default(true);
            $table->integer('postion_shop')->default(0);
            $table->integer('postion_web')->default(0);
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
