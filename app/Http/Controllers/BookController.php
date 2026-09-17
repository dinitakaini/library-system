<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Panji',
                'year' => 2023
            ],
            [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Dosen PWF',
                'year' => 2024
            ],
            [
                'title' => 'Basis Data',
                'author' => 'Yeni',
                'year' => 2022
            ],
            [
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Andi',
                'year' => 2021
            ],
            [
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Budi',
                'year' => 2023
            ]
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
    return view('books.show', compact('id'));
    }
}