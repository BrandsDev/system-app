<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
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
        'bootstrap_v',
        'released',
        'updated',
        'version',
        'seller_name',
        'seller_email',
        'short_description',
        'long_description',
        'change_log',
        'youtube_iframe',
        'header_content',
        'meta_title',
        'meta_description',
        'order_type',
        'is_featured',
        'live_preview_link',
        'downloadable_link',
        'image',
        'og',
        'file',
        'status',
        'comment',
    ];
}
