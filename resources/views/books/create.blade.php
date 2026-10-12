@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label>Penulis</label>
            <input type="text" name="author" value="{{ old('author') }}" required>
        </div>

        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year" value="{{ old('year') }}" required>
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stock" value="{{ old('stock') }}" min="0" required>
        </div>

        <button type="submit">Simpan Buku</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
@endsection
