<?php

namespace App\Http\Controllers;

use App\Models\M_buku;
use App\Models\M_kategori;
use App\Models\M_pinjam_buku;
use App\Models\M_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controller_dashboard extends Controller
{
    //admin dashboard
    public function show()
    {
        $user = Auth::user();
        $title = 'Dashboard';
        $books = M_buku::all()->count();
        $totBukuPinjam = M_buku::where('status_pinjaman', '=', 1)->count();
        $totSiswa = M_user::where('role', '=', 'siswa')->count();
        $totKategori = M_kategori::all()->count();

        return view('admin.dashboard.index', compact('user', 'title', 'books', 'totSiswa', 'totBukuPinjam', 'totKategori'));
    }

    // siswa landing page
    public function dashboardSiswa()
    {

        $user = Auth::user();
        $title = 'Landing Page';
        $books = M_buku::orderBy('created_at', 'desc')->take(5)->get();
        $pengguna = M_user::paginate(200);
        $allBook = M_buku::paginate(1000);
        return view('siswa.dashboard.index', compact('user', 'title', 'books', 'pengguna', 'allBook'));
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
        $pinjam_buku = M_pinjam_buku::where('id_buku', $id)
            ->whereNull('tanggal_kembali')
            ->first();
        if ($pinjam_buku) {
            $id_user = $pinjam_buku->id_user;
            $username = M_user::where('id_user', $id_user)->first()->username;
        } else {
            $username = null; // Atau nilai default lainnya sesuai kebutuhan Anda
        }

        return view('siswa.books.detail_book', compact('user', 'title', 'book', 'username'));
    }
}
