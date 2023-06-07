<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sub_category_name',
        'slug',
        'category_name',
        'description',
        'meta_title',
        'meta_description',
        'icon',
        'thumb',
        'cover',
        'og_image',
    ];
}
