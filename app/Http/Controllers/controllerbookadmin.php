<?php

namespace App\Http\Controllers;

use App\Models\M_buku;
use App\Models\modelbook;
use Illuminate\Http\Request;

class controllerbookadmin extends Controller
{
    //
    public function show()
    {
        $books = M_buku::all()->toArray();

        // Mengembalikan view dengan data buku
        return view('admin.Book.index', compact('books'));
    }
}
