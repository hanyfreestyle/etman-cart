<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string("photo")->nullable();
            $table->string("photo_thum_1")->nullable();
            $table->boolean("is_active")->default(true);
            $table->integer('postion')->default(0);
            $table->integer('text_view')->default(1);
            $table->integer('url_type')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('banner_categories')->onDelete('cascade');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
