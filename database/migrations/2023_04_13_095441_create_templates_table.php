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
            $table->string('sub-category', 100)->nullable();
            $table->string('sub-sub-category', 100)->nullable();
            $table->string('sale-price', 100)->nullable();
            $table->string('regular-price', 100);
            $table->string('commission', 100)->nullable();
            $table->string('bootstrap-v', 100);
            $table->dateTime('released', $precision = 0)->timestamps();
            $table->dateTime('updated', $precision = 0)->timestamps();
            $table->string('version', 100);
            $table->string('seller-name', 100);
            $table->string('seller-email', 100);
            $table->tinyText('short-description')->nullable();
            $table->tinyText('long-description')->nullable();
            $table->tinyText('change-log')->nullable();
            $table->text('youtube-iframe')->nullable()->nullable();
            $table->text('header-content')->nullable()->nullable();
            $table->text('meta-title')->nullable()->nullable();
            $table->text('meta-description')->nullable()->nullable();
            $table->text('live-preview-link')->nullable();
            $table->text('downloadable-link')->nullable();
            $table->text('upload-image')->nullable()->nullable();
            $table->text('upload-file')->nullable()->nullable();
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
