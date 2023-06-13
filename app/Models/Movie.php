<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'trailer',
        'movie',
        'cast',
        'small_thumbnail',
        'large_thumbnail',
        'release_date',
        'small_description',
        'description',
        'duration',
        'featured',
    ];
}
