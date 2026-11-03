
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
                <th>Stok</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        @if ($book->stock > 0)
                            {{ $book->stock }}
                        @else
                            Habis
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}">
                            Lihat Detail
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
