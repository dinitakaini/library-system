@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" required>
        </div>

        <div>
            <label>Penulis</label>
            <input type="text" name="author" value="{{ old('author', $book->author) }}" required>
        </div>

        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year" value="{{ old('year', $book->year) }}" required>
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stock" value="{{ old('stock', $book->stock) }}" min="0" required>
        </div>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection
