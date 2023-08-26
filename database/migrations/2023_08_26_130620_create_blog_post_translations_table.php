<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('blog_post_translations', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('blog_id')->unsigned();
            $table->string('locale')->index();
            $table->string('slug');
            $table->string('name')->nullable();
            $table->longText('des')->nullable();

            $table->string('g_title')->nullable();
            $table->text('g_des')->nullable();

            $table->unique(['blog_id','locale']);
            $table->unique(['locale','slug']);
            $table->foreign('blog_id')->references('id')->on('blog_posts')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('blog_post_translations');
    }
};
