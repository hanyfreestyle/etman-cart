<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_table_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_table_id')->unsigned();
            $table->string('locale')->index();
            $table->text('des')->nullable();
            $table->unique(['category_table_id','locale']);
            $table->foreign('category_table_id')->references('id')->on('category_tables')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_table_translations');
    }
};
