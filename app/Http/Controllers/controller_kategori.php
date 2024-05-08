<?php

namespace App\Http\Controllers;

use App\Models\M_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controller_kategori extends Controller
{
    //
    //
    public function show()
    {
        $user = Auth::user();
        $title = 'Kelola kategori';
        $categorys = M_kategori::paginate(5);
        return view('admin.kategori.index', compact('categorys', 'user', 'title'));
    }

    // delete
    public function delete($id)
    {
        // Temukan buku berdasarkan ID
        $buku = M_kategori::findOrFail($id);
        // Hapus buku
        $buku->delete();

        // Simpan pesan berhasil ke dalam session
        return redirect()->back()->with('success', 'Kategori telah dihapus');
    }
}
