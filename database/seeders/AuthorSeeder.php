<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::insert([
            ['name' => 'J.K. Rowling', 'photo' => 'jk_rowling.jpg', 'bio' => 'Penulis seri Harry Potter yang terkenal di seluruh dunia.'],
            ['name' => 'Stephen King', 'photo' => 'stephen_king.jpg', 'bio' => 'Penulis novel horor dan thriller dari Amerika.'],
            ['name' => 'Agatha Christie', 'photo' => 'agatha_christie.jpg', 'bio' => 'Penulis detektif legendaris dengan karakter Hercule Poirot.'],
            ['name' => 'George Orwell', 'photo' => 'george_orwell.jpg', 'bio' => 'Penulis terkenal dengan karya 1984 dan Animal Farm.'],
            ['name' => 'Haruki Murakami', 'photo' => 'haruki_murakami.jpg', 'bio' => 'Penulis Jepang dengan gaya realisme magis.'],
        ]);
    }
}
