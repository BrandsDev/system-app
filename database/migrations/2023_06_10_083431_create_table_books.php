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
            $table->string('subcategory_name', 100)->nullable();
            $table->string('sub_subcategory_name', 100)->nullable();
            $table->string('sku', 100);
            $table->string('sale_price', 100)->nullable();
            $table->string('regular_price', 100);
            $table->string('commission', 100)->nullable();
            $table->string('publisher', 100);
            $table->string('ranking')->nullable();
            $table->string('author', 100);
            $table->tinyText('short_description')->nullable();
            $table->tinyText('long_description')->nullable();
            $table->tinyText('specification')->nullable();
            $table->text('youtube_iframe')->nullable();
            $table->text('header_content')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('order_type', 100);
            $table->text('image')->nullable();
            $table->text('page_images')->nullable();
            $table->text('og_image')->nullable();
            $table->text('file')->nullable();
            $table->boolean('status')->nullable()->default('0');
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
