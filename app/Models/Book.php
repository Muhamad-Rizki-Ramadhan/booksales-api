<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    protected $fillable = ['title', 'price', 'author_id', 'stock', 'cover_photo', 'description'];

    protected $table = 'books';
}
