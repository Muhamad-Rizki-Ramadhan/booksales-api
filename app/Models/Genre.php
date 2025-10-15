<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public static function getAll()
    {
        return [
            ['id' => 1, 'name' => 'Fantasy'],
            ['id' => 2, 'name' => 'Science Fiction'],
            ['id' => 3, 'name' => 'Romance'],
            ['id' => 4, 'name' => 'Thriller'],
            ['id' => 5, 'name' => 'Biography'],
        ];
    }
}
