@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <td>{{ $book->id }}</td>
        </tr>
        <tr>
            <th>Judul Buku</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>Penulis</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>Tahun Terbit</th>
            <td>{{ $book->year }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $book->stock }}</td>
        </tr>
    </table>

    <br>

    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
@endsection