<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
            ->constrained('categories')
            ->cascadeOnDelete();
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('body_uz');
            $table->string('body_ru');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->integer('view')->default(0);
            $table->string('meta_title')->nullable(); 
            $table->string('meta_description')->nullable(); 
            $table->string('meta_keywords')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
