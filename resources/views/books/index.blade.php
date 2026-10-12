@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>
        <a href="{{ route('books.create') }}">+ Tambah Buku</a>
    </p>

    @forelse ($books as $book)
        <div>
            <p>ID: {{ $book->id }}</p>
            <h3>{{ $book->title }}</h3>
            <p>Penulis: {{ $book->author }}</p>
            <p>Tahun Terbit: {{ $book->year }}</p>
            <p>Stok: {{ $book->stock }}</p>

            <a href="{{ route('books.show', $book) }}">Detail</a> |
            <a href="{{ route('books.edit', $book) }}">Edit</a>

            <form action="{{ route('books.destroy', $book) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit"
                    onclick="return confirm('Yakin ingin menghapus buku ini?')">
                    Hapus
                </button>
            </form>
        </div>

        <hr>
    @empty
        <p>Belum ada data buku.</p>
    @endforelse
@endsection
