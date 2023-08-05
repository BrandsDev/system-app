<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
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
        'gender',
        'bio',
        'mobile',
        'email',
        'address',
        'description',
        'youtube_iframe',
        'meta_title',
        'meta_description',
        'image',
        'og',
        'banner',
        'status',
    ];
}
