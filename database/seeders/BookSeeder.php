<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Anak Rantau',
            'description' => 'Kisah epik seorang pemuda yang berjuang di ibu kota, penuh misteri dan fantasi.',
            'price' => 115000,
            'stock' => 12,
            'cover_photo' => 'anak_rantau.jpg',
            'author_id' => 4, 
        ]);

        Book::create([
            'title' => 'Senja di Pelabuhan Kecil',
            'description' => 'Kisah cinta abadi yang terhalang takdir di sebuah kota pelabuhan yang indah.',
            'price' => 78500,
            'stock' => 30,
            'cover_photo' => 'senja_pelabuhan.jpg',
            'author_id' => 2,
        ]);

        Book::create([
            'title' => 'The Silent Killer',
            'description' => 'Misi rahasia seorang agen yang harus menghentikan rencana teror global di Tokyo.',
            'price' => 145000,
            'stock' => 8,
            'cover_photo' => 'silent_killer.jpg',
            'author_id' => 1,
        ]);
        
        Book::create([
            'title' => 'Filosofi Teras',
            'description' => 'Panduan praktis untuk hidup lebih tenang dan mengatasi kecemasan sehari-hari.',
            'price' => 89000,
            'stock' => 22,
            'cover_photo' => 'filosofi_teras.jpg',
            'author_id' => 3, 
        ]);

        Book::create([
            'title' => 'Project: Alpha Centauri',
            'description' => 'Perjalanan ke luar angkasa untuk menemukan planet baru sebelum Bumi hancur.',
            'price' => 175000,
            'stock' => 5,
            'cover_photo' => 'alpha_centauri.jpg',
            'author_id' => 2, 
        ]);
    }
}
