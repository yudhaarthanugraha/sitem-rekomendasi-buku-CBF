<?php

namespace App\Http\Controllers;

use App\Models\M_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controller_buku extends Controller
{
    //
    public function show() {
        $user = Auth::user();
        $books = M_buku::all()->toArray();

        // Mengembalikan view dengan data buku
        return view('admin.Book.index', compact('books', 'user'));
    }
}
