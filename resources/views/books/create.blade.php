@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Penulis</label>
            <input type="text" name="author" value="{{ old('author') }}" required>
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
                {{ old('category_id') == $category->id ? 'selected' : '' }}>
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
            <input type="number" name="year" value="{{ old('year') }}" required>
            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stock" value="{{ old('stock', 0) }}" min="0" required>
            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan Buku</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Kembali</a>
@endsection