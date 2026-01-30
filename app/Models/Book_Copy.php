<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Copy extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'barcode',
        'shelf_location',
        'status'
    ];
}
