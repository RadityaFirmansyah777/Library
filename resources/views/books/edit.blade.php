
@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title"
                value="{{ old('title', $book->title) }}" required>
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Penulis</label>
            <input type="text" name="author"
                value="{{ old('author', $book->author) }}" required>
            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>

        
        <div>
            <label>Kategori Buku</label>
            <select name="category_id" required>
            <option value="">-- Pilih Kategori --</option>

            @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
            </select>

            @error('category_id')
                <p>{{ $message }}</p>
            @enderror
        </div>


        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year"
                value="{{ old('year', $book->year) }}" required>
            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stock"
                value="{{ old('stock', $book->stock) }}" min="0" required>
            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Kembali</a>
@endsection
