@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    @foreach($books as $book)
        <div>
            <p>ID: {{ $book->id }}</p>
            <h3>{{ $book->title }}</h3>
            <p>Penulis: {{ $book->author }}</p>
            <p>Tahun Terbit: {{ $book->year }}</p>
            <p>Stok: {{ $book->stock }}</p>
        </div>

        <hr>
    @endforeach
@endsection