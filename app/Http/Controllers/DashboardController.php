<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System';
        $description = 'Simple Library Information System';
        $totalBooks = 5;
        $totalMembers = 5;
        $totalCategories = 5;

        return view('dashboard.index', compact(
            'title',
            'description',
            'totalBooks',
            'totalMembers',
            'totalCategories'
        ));
    }
}