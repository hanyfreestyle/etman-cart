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
        Schema::create('banner_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('banner_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->text('des')->nullable();
            $table->text('other')->nullable();
            $table->text('url')->nullable();
            $table->string('url_but')->nullable();
            $table->unique(['banner_id','locale']);
            $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_translations');
    }
};
