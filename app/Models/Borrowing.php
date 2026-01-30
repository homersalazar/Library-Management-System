<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'book_copy_id',
        'borrowed_at',
        'due_date',
        'returned_at'
    ];
}
