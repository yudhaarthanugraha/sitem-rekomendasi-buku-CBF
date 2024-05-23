<?php

namespace App\Http\Controllers;

use App\Models\M_buku;
use App\Models\M_pinjam_buku;
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
        $dataValidate =  $request->validate(['judul' => 'required', 'user' => 'required', 'tanggal_pinjam' => 'required']);
        $pinjam_buku = new M_pinjam_buku();
        // dd($dataValidate);
        $buku = M_buku::where('id_buku', $request->judul)->firstOrFail();
        $buku->status_pinjaman = 1;
        $pinjam_buku->id_buku = $request->judul;
        $pinjam_buku->id_user = $request->user;
        $pinjam_buku->tanggal_pinjam = $request->tanggal_pinjam;
        $buku->save();
        $pinjam_buku->save();
        return redirect()->route('kelola-buku')->with('success', 'buku di dipinjam  telah ditambahkan');
    }
    public function kembali_buku($id)
    {
        $id_buku = $id;
        $buku = M_buku::findOrFail($id);
        $title = 'Halaman kembali buku ';
        $id_user = M_pinjam_buku::where('id_buku', $id)
        ->whereNull('tanggal_kembali')
        ->firstOrFail()->id_user;
        $username = M_user::where('id_user', $id_user)->firstOrFail()->username;
        return view('admin.pinjam_buku.kembali_buku', compact('id_buku', 'title', 'buku', 'username'));
    }
    public function update_kembali_buku(Request $request, $id)
    {
        $dataValidate =  $request->validate(['tanggal_kembali' => 'required']);
        // dd($dataValidate);
        $pinjam_buku = M_pinjam_buku::where('id_buku', $id)
            ->whereNull('tanggal_kembali')
            ->firstOrFail();
        $buku = M_buku::where('id_buku', $id)->firstOrFail();
        $buku->status_pinjaman = 0;
        $pinjam_buku->tanggal_kembali = $request->tanggal_kembali;
        $buku->save();
        $pinjam_buku->save();
        return redirect()->route('kelola-buku')->with('success', 'buku telah dikembalikan');
    }
}
