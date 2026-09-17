<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Dini Nitakaini',
            'Dwi Endah Saumi',
            'Andi Pratama',
            'Budi Santoso',
            'Citra Lestari'
        ];

        return view('members.index', compact('members'));
    }
}