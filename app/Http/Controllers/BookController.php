<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

    $title = 'Daftar Buku';
    $description = 'Berikut adalah koleksi buku yang tersedia.';

    return view('books.index', compact(
        'books',
        'title',
        'description'
    ));
    }

    public function show($id)
{
    $book = Book::findOrFail($id);

    return view('books.show', compact('book'));
}
}