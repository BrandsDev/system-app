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
        'sub-category',
        'sub-sub-category',
        'sale-price',
        'regular-price',
        'commission',
        'bootstrap-v',
        'released',
        'updated',
        'version',
        'seller-name',
        'seller-email',
        'short-description',
        'long-description',
        'change-log',
        'youtube-iframe',
        'header-content',
        'meta-title',
        'meta-description',
        'live-preview-link',
        'downloadable-link',
        'upload-image',
        'upload-file',
        'status',
        'comment',
    ];
}
