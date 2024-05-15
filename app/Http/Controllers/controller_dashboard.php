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
        // dd($books);
        return view('siswa.dashboard.index', compact('user', 'title', 'books'));
    }

    // Siswa Books List
    public function booksList()
    {
        $user = Auth::user();
        $title = 'Daftar Buku';

        return view('siswa.books.list_book', compact('user', 'title'));
    }

    // Siswa detail
    public function detailBook()
    {
        $user = Auth::user();
        $title = 'Detail Buku';
        $id = 1;

        return view('siswa.books.detail_book', compact('user', 'title', 'id'));
    }
}
