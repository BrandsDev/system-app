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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->string('category', 100);
            $table->string('sub_category', 100)->nullable();
            $table->string('sub_sub_category', 100)->nullable();
            $table->string('sale_price', 100)->nullable();
            $table->string('regular_price', 100);
            $table->string('commission', 100)->nullable();
            $table->string('bootstrap_v', 100);
            $table->dateTime('released', $precision = 0)->timestamps();
            $table->dateTime('updated', $precision = 0)->timestamps();
            $table->string('version', 100);
            $table->string('seller_name', 100);
            $table->string('seller_email', 100);
            $table->tinyText('short_description')->nullable();
            $table->tinyText('long_description')->nullable();
            $table->tinyText('change_log')->nullable();
            $table->text('youtube_iframe')->nullable()->nullable();
            $table->text('header_content')->nullable()->nullable();
            $table->text('meta_title')->nullable()->nullable();
            $table->text('meta_description')->nullable()->nullable();
            $table->text('live_preview_link')->nullable();
            $table->text('downloadable_link')->nullable();
            $table->text('upload_image')->nullable()->nullable();
            $table->text('upload_file')->nullable()->nullable();
            $table->enum('status', ['0', '1'])->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
