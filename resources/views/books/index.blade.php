
@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <h3>Koleksi Buku</h3>
    <a href="{{ route('books.create') }}">+ Tambah Buku</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Aksi</th>
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
                        <a href="{{ route('books.show', $book->id) }}">Detail</a> |
    <a href="{{ route('books.edit', $book->id) }}">Edit</a> |

    <form action="{{ route('books.destroy', $book->id) }}"
      method="POST"
      style="display: inline;">
    @csrf
    @method('DELETE')

    <button type="submit"
            onclick="return confirm('Yakin ingin menghapus buku ini?')">
        Hapus
    </button>
    </form>
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
