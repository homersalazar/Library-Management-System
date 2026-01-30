<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'isbn',
        'title',
        'publisher',
        'publication_year',
        'language',
        'description',
        'cover_image'
    ];
}
