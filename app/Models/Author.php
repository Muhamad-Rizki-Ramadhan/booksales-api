<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    public static function getAll()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling', 'country' => 'United Kingdom'],
            ['id' => 2, 'name' => 'George R.R. Martin', 'country' => 'USA'],
            ['id' => 3, 'name' => 'Haruki Murakami', 'country' => 'Japan'],
            ['id' => 4, 'name' => 'Tere Liye', 'country' => 'Indonesia'],
            ['id' => 5, 'name' => 'Andrea Hirata', 'country' => 'Indonesia'],
        ];
    }
}
