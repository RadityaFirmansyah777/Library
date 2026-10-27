
@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>

    <p>ID: {{ $bookId }}</p>
    <p>Judul Buku: {{ $book['title'] }}</p>
    <p>Penulis: {{ $book['author'] }}</p>
    <p>Tahun Terbit: {{ $book['year'] }}</p>

    <a href="/books">Kembali ke Daftar Buku</a>
@endsection
