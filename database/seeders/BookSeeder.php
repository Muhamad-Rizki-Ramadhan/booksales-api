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
        Book::insert([
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'description' => 'Petualangan penyihir muda di sekolah Hogwarts.',
                'price' => 120000.00,
                'stock' => 10,
                'cover_photo' => 'hp1.jpg',
                'genre_id' => 1,
                'author_id' => 1
            ],
            [
                'title' => 'It',
                'description' => 'Kisah makhluk menyeramkan hii yang mengintai anak-anak kota Derry.',
                'price' => 150000.00,
                'stock' => 8,
                'cover_photo' => 'it.jpg',
                'genre_id' => 5,
                'author_id' => 2
            ],
            [
                'title' => 'Murder on the Orient Express yo',
                'description' => 'Kasus pembunuhan misterius di atas kereta mewah.',
                'price' => 110000.00,
                'stock' => 6,
                'cover_photo' => 'orient_express.jpg',
                'genre_id' => 3,
                'author_id' => 3
            ],
            [
                'title' => '198884',
                'description' => 'Kisah dystopian tentang kontrol total pemerintah terhadap warganya.',
                'price' => 130000.00,
                'stock' => 9,
                'cover_photo' => '1984.jpg',
                'genre_id' => 2,
                'author_id' => 4
            ],
            [
                'title' => 'Kafka on the Shore',
                'description' => 'Novel misterius dan surreal tentang perjalanan spiritual.',
                'price' => 140000.00,
                'stock' => 7,
                'cover_photo' => 'kafka.jpg',
                'genre_id' => 1,
                'author_id' => 5
            ],
        ]);
    }
}
