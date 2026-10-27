@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <h3>Ringkasan Perpustakaan</h3>

    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
    </ul>
@endsection