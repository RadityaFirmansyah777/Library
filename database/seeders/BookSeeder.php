<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Budi Raharjo',
                'year' => 2021,
                'stock' => 10,
            ],
            [
                'title' => 'Dasar-Dasar Laravel',
                'author' => 'Muhammad Iqbal',
                'year' => 2022,
                'stock' => 8,
            ],
            [
                'title' => 'Belajar MySQL',
                'author' => 'Rosa A.S.',
                'year' => 2020,
                'stock' => 12,
            ],
            [
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Abdul Kadir',
                'year' => 2019,
                'stock' => 5,
            ],
            [
                'title' => 'Rekayasa Perangkat Lunak',
                'author' => 'Rosa A.S.',
                'year' => 2023,
                'stock' => 7,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}