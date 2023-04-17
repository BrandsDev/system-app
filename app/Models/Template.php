<?php

namespace App\Models;

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
        'category',
        'sub_category',
        'sub_sub_category',
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
        'live_preview_link',
        'downloadable_link',
        'image',
        'file',
        'status',
        'comment',
    ];
}
