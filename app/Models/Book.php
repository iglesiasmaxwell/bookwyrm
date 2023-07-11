<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book_info';
    protected $fillable = [
        'title',
        'subtitle',
        'author',
        'pages',
        'year',
        'rating',
        'condition',
    ];
}
