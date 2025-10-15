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
        Author::create([
            'name' => 'Amar',
            'country' => 'UK',
        ]);

        Author::create([
            'name' => 'Luvian',
            'country' => 'USA',
        ]);

        Author::create([
            'name' => 'Raply',
            'country' => 'Japan',
        ]);

        Author::create([
            'name' => 'IVan',
            'country' => 'Indonesia',
        ]);
    }
}
