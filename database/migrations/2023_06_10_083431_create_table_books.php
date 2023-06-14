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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->string('category_name', 100);
            $table->string('subcategory_name', 100);
            $table->string('sub_subcategory_name', 100)->nullable();
            $table->string('sku', 100);
            $table->string('sale_price', 100)->nullable();
            $table->string('regular_price', 100);
            $table->string('commission', 100)->nullable();
            $table->string('publisher', 100);
            $table->string('ranking', 4)->nullable();
            $table->string('author', 100);
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('specification')->nullable();
            $table->text('youtube_iframe')->nullable();
            $table->text('header_content')->nullable();
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_description', 199)->nullable();
            $table->boolean('order_type')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('page_images', 255)->nullable();
            $table->string('og', 255)->nullable();
            $table->string('file', 255)->nullable();
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
        Schema::dropIfExists('books');
    }
};
