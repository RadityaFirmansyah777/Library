@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <h3>Koleksi Buku</h3>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $id => $book)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                    <td>
                        <a href="/books/{{ $id }}">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Informasi Stok</h3>

    @if ($stock > 0)
        <p>Buku tersedia. Jumlah stok: {{ $stock }}</p>
    @else
        <p>Buku sedang habis.</p>
    @endif
@endsection