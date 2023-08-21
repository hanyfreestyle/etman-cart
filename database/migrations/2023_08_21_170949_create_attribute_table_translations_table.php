<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('attribute_table_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('attribute_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name')->nullable();

            $table->unique(['attribute_id','locale']);
            $table->foreign('attribute_id')->references('id')->on('attribute_tables')->onDelete('cascade');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('attribute_table_translations');
    }
};
