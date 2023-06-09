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
        Schema::create('audios', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('artist', 100);
            $table->string('duration', 100)->nullable();
            $table->string('release_date', 100)->nullable();
            $table->string('category_name', 100)->nullable();
            $table->string('subcategory_name', 100)->nullable();
            $table->string('sub_subcategory_name', 100)->nullable();
            $table->string('genre', 100)->nullable();
            $table->string('album', 100)->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('youtube_iframe')->nullable();
            $table->text('header_content')->nullable();
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_description', 200)->nullable();
            $table->boolean('is_featured')->nullable();
            $table->string('cover_image', 255)->nullable();
            $table->string('audio_file', 255)->nullable();
            $table->string('og', 255)->nullable();
            $table->boolean('status')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audios');
    }
};
