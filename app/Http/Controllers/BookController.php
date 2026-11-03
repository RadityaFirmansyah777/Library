<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
    'title' => 'required|string|min:3|max:255',
    'author' => 'required|string|min:3|max:255',
    'year' => 'required|integer|between:1901,2155',
    'stock' => 'required|integer|min:0|max:1000',
    ]);
        Book::create($validated);

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|between:1901,2155',
            'stock' => 'required|integer|min:0',
        ]);

        $book->update($validated);

        return redirect()->route('books.index');
    }

    // DELETE: Menghapus buku
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
