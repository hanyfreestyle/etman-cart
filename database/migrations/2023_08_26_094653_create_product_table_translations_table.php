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
        Schema::create('product_table_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_table_id')->unsigned();
            $table->string('locale')->index();
            $table->text('des')->nullable();
            $table->unique(['product_table_id','locale']);
            $table->foreign('product_table_id')->references('id')->on('product_tables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_table_translations');
    }
};
