@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <h3>Informasi Library</h3>

    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
    </ul>

    @if($totalBooks > 0)
        <p>Data buku tersedia.</p>
    @else
        <p>Belum ada data buku.</p>
    @endif
@endsection