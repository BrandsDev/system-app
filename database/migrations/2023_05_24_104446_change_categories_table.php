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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name', 199);
            $table->string('slug', 199);
            $table->tinyText('description', 199)->nullable();
            $table->tinyText('meta_title', 199)->nullable();
            $table->tinyText('meta_description', 199)->nullable();
            $table->text('icon');
            $table->text('thumb');
            $table->text('cover');
            $table->text('og_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
