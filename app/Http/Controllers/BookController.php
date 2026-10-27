<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    private function getBooks()
    {
        return [
            1 => [
                'title' => 'Pemrograman PHP',
                'author' => 'Budi Raharjo',
                'year' => 2022,
            ],
            2 => [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Eko Kurniawan',
                'year' => 2023,
            ],
            3 => [
                'title' => 'Basis Data',
                'author' => 'Fathansyah',
                'year' => 2021,
            ],
            4 => [
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Rinaldi Munir',
                'year' => 2020,
            ],
            5 => [
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Abdul Kadir',
                'year' => 2022,
            ],
            6 => [
                'title' => 'Sistem Informasi Manajemen',
                'author' => 'Tata Sutabri',
                'year' => 2021,
            ],
            7 => [
                'title' => 'Jaringan Komputer',
                'author' => 'Andi',
                'year' => 2020,
            ],
            8 => [
                'title' => 'Rekayasa Perangkat Lunak',
                'author' => 'Rosa A.S.',
                'year' => 2023,
            ],
        ];
    }

    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';
        $books = $this->getBooks();
        $stock = 7  ;

        return view('books.index', compact(
            'title',
            'description',
            'books',
            'stock'
        ));
    }

    public function show($id)
    {
        $books = $this->getBooks();

        if (!isset($books[$id])) {
            abort(404);
        }

        $book = $books[$id];
        $bookId = $id;

        return view('books.show', compact('book', 'bookId'));
    }
}
