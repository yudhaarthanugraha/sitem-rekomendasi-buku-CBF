<?php

namespace App\Http\Controllers;

use App\Models\M_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controller_dashboard extends Controller
{
    //admin dashboard
    public function show()
    {
        $user = Auth::user();
        $title = 'Dashboard';
        $books = M_buku::paginate(100);

        return view('admin.dashboard.index', compact('user', 'title', 'books'));
    }

    // siswa landing page
    public function dashboardSiswa()
    {
        $user = Auth::user();
        $title = 'Landing Page';
        $books = M_buku::orderBy('created_at', 'desc')->take(5)->get();

        return view('siswa.dashboard.index', compact('user', 'title', 'books'));
    }

    // Siswa Books List
    public function booksList($letter = null)
    {
        $user = Auth::user();
        $title = 'Daftar Buku';

        if (!$letter) {
            $letter = '#';
        }

        if ($letter === '#') {
            $books = M_buku::whereRaw('LEFT(judul, 1) REGEXP "^[0-9[:punct:]]"')
                ->paginate(9);
        } else {
            $books = M_buku::where('judul', 'LIKE', $letter . '%')
                ->paginate(9);
        }

        return view('siswa.books.list_book', compact('user', 'title', 'books', 'letter'));
    }

    // Siswa detail
    public function detailBook($id)
    {
        $user = Auth::user();
        $title = 'Detail Buku';

        $book = M_buku::find($id);

        return view('siswa.books.detail_book', compact('user', 'title', 'book'));
    }
}
