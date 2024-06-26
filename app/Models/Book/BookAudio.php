<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAudio extends Model
{
    use HasFactory;
    
    protected $table = 'audios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'artist',
        'duration',
        'release_date',
        'category_name',
        'subcategory_name',
        'sub_subcategory_name',
        'genre',
        'album',
        'short_description',
        'long_description',
        'youtube_iframe',
        'header_content',
        'meta_title',
        'meta_description',
        'is_featured',
        'cover_image',
        'audio_file',
        'og',
        'status',
        'comment',
    ];
}
