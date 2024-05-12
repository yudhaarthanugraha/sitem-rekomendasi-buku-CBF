<?php

namespace App\Http\Controllers;

use App\Models\M_buku;
use App\Models\M_user;
use Illuminate\Http\Request;

class controller_pinjam_buku extends Controller
{
    //
    public function show(Request $request, $id)
    {
        $title = 'Halaman peminjaman';
        $buku = M_buku::findOrFail($id);
        $books = M_buku::all();
        $siswas = M_user::where('role', 'siswa')->get();
        // $siswas = M_user::where('role', 'siswa')->get();
        return view('admin.pinjam_buku.index', compact('buku', 'books', 'title', 'siswas'));
    }
    public function create(Request $request)
    {
        dd($request->input());

    }
}
