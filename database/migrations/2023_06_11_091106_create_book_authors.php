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
        Schema::create('book_authors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 199);
            $table->string('slug', 199);
            $table->string('gender', 100);
            $table->string('bio', 199)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 199)->nullable();
            $table->string('description', 199)->nullable();
            $table->string('youtube_iframe', 199)->nullable();
            $table->string('meta_title', 199)->nullable();
            $table->string('meta_description', 199)->nullable();
            $table->string('image', 255)->default('default-image.png');
            $table->string('og_image', 255)->default('default-og-image.png');
            $table->string('cover', 255)->default('default-cover.png');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_authors');
    }
};
