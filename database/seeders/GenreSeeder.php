<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
            [
                'name' => 'Fantasy',
                'description' => 'Cerita yang mengandung elemen magis, dunia imajinatif, atau makhluk mitologi.'
            ],
            [
                'name' => 'Science Fiction',
                'description' => 'Bercerita tentang masa depan, teknologi, luar angkasa, atau eksperimen ilmiah.'
            ],
            [
                'name' => 'Mystery',
                'description' => 'Fokus pada pemecahan teka-teki, misteri, atau kasus kejahatan.'
            ],
            [
                'name' => 'Romance',
                'description' => 'Berisi kisah cinta dan hubungan emosional antar karakter.'
            ],
            [
                'name' => 'Horror',
                'description' => 'Cerita menegangkan dan menyeramkan yang membangkitkan rasa takut.'
            ],
        ]);
    }
}
