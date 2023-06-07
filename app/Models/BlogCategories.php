<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_name',
        'slug',
        'description',
        'meta_title',
        'meta_description',
        'icon',
        'thumb',
        'cover',
        'og_image',
    ];

    // protected $fillable = [
    //     'categories' => [
    //         'category_name',
    //         'slug',
    //         'description',
    //         'meta_title',
    //         'meta_description',
    //         'icon',
    //         'thumb',
    //         'cover',
    //         'og_image',
    //     ],
    //     'sub_categories' => [
    //         'sub_category_name',
    //         'slug',
    //         'category_name',
    //         'description',
    //         'meta_title',
    //         'meta_description',
    //         'icon',
    //         'thumb',
    //         'cover',
    //         'og_image',
    //     ],
    //     'sub_sub_categories' => ['field5', 'field6'],
    //     // Other shared fillable fields
    // ];
}
