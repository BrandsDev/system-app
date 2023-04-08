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
        Schema::create('template_details', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->string('category', 100);
            $table->string('sub-category', 100);
            $table->string('sub-sub-category', 100);
            $table->string('sale-price', 100);
            $table->string('regular-price', 100);
            $table->string('commission', 100);
            $table->string('bootstrap-v', 100);
            $table->dateTime('released', $precision = 0);
            $table->dateTime('updated', $precision = 0);
            $table->string('version', 100);
            $table->string('seller-name', 100);
            $table->string('seller-email', 100);
            $table->tinyText('short-description');
            $table->tinyText('long-description');
            $table->tinyText('change-log');
            $table->text('youtube-iframe')->nullable($value = true);
            $table->text('header-content')->nullable($value = true);
            $table->text('meta-title')->nullable($value = true);
            $table->text('meta-description')->nullable($value = true);
            $table->text('live-preview-link');
            $table->text('downloadable-link');
            $table->text('upload-image')->nullable($value = true);
            $table->text('upload-file')->nullable($value = true);
            $table->text('add-template-comment')->nullable($value = true)->comment('my comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_details');
    }
};
