<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Panji',
            'year' => 2023,
            'stock' => 10
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Dosen PWF',
            'year' => 2024,
            'stock' => 8
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Yeni',
            'year' => 2022,
            'stock' => 7
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Andi',
            'year' => 2021,
            'stock' => 5
        ]);

        Book::create([
            'title' => 'Pemrograman Berorientasi Objek',
            'author' => 'Budi',
            'year' => 2023,
            'stock' => 6
        ]);
    }
}