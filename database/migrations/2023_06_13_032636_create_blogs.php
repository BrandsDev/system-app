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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->string('tags', 100)->nullable();
            $table->string('header_title', 100);
            $table->string('category_name', 100);
            $table->string('subcategory_name', 100)->nullable();
            $table->string('sub_subcategory_name')->nullable();
            $table->string('book', 100)->nullable();
            $table->tinyText('author');
            $table->tinyText('short_description')->nullable();
            $table->tinyText('long_description')->nullable();
            $table->text('youtube_iframe')->nullable();
            $table->text('header_content')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('is_featured')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('file')->nullable();
            $table->text('og')->nullable();
            $table->boolean('status')->default('0');
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
