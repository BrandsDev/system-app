<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'category_name',
        'subcategory_name',
        'sub_subcategory_name',
        'sku',
        'sale_price',
        'regular_price',
        'commission',
        'publisher',
        'ranking',
        'author',
        'short_description',
        'long_description',
        'specification',
        'youtube_iframe',
        'header_content',
        'meta_title',
        'meta_description',
        'order_type',
        'is_featured',
        'image',
        'page_images',
        'og',
        'file',
        'status',
        'comment',
    ];
}
