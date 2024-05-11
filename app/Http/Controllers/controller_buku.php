<?php

namespace App\Http\Controllers;

use App\Models\M_buku;
use App\Models\M_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controller_buku extends Controller
{
    //
    public function show()
    {
        $user = Auth::user();
        $books = M_buku::paginate(5);
        $title = 'Kelola Buku';
        $genres = [
            (object) ['nama' => 'Horor'],
            (object) ['nama' => 'Romance'],
            (object) ['nama' => 'Edukasi'],
            (object) ['nama' => 'Fantasi'],
            (object) ['nama' => 'Fiksi Ilmiah'],
            (object) ['nama' => 'Misteri'],
            (object) ['nama' => 'Sejarah'],
            (object) ['nama' => 'Biografi'],
            (object) ['nama' => 'Komedi'],
            (object) ['nama' => 'Drama'],
            // Tambahkan genre lainnya sesuai kebutuhan
        ];
        $kategoris = M_kategori::all();
        // Mengembalikan view dengan data buku
        return view('admin.buku.index', compact('books', 'user', 'title', 'genres', 'kategoris'));
    }

    // public function tambah()
    // {
    //     $title = 'Master buku';
    //     return view('admin.buku.tambah', compact('title'));
    // }

    public function create(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'tahun_terbit' => 'required|string|max:255',
            'gendre' => 'required|string|max:255',
            'sinopsis' => 'required|string|max:500',
            'kategori' => 'required|string|max:500',
            'kode_buku' => 'required|string|max:255|unique:tb_buku',
        ]);
        // Simpan data buku baru ke dalam database
        $buku = new M_buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->gendre = $request->gendre;
        $buku->sinopsis = $request->sinopsis;
        $buku->kategori = $request->kategori;
        $buku->kode_buku = $request->kode_buku;
        $buku->save();
        // Jika penyimpanan berhasil, kembalikan respons berhasil
        return redirect()->route('kelola-buku')->with('success', 'Data buku ' . $request->judul . ' berhasil ditambahkan');
    }
    // controller
    public function edit($id)
    {
        $title = 'Master buku';
        $book = M_buku::findOrFail($id);

        $genres = [
            (object) ['nama' => 'Horor'],
            (object) ['nama' => 'Romance'],
            (object) ['nama' => 'Edukasi'],
            (object) ['nama' => 'Fantasi'],
            (object) ['nama' => 'Fiksi Ilmiah'],
            (object) ['nama' => 'Misteri'],
            (object) ['nama' => 'Sejarah'],
            (object) ['nama' => 'Biografi'],
            (object) ['nama' => 'Komedi'],
            (object) ['nama' => 'Drama'],
            // Tambahkan genre lainnya sesuai kebutuhan
        ];
        $kategoris = M_kategori::all();
        return view('admin.buku.edit', compact('title', 'book', 'genres', 'kategoris'));
    }
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|date',
            'gendre' => 'required|string|max:255',
            'sinopsis' => 'required|string|max:500',
            'kategori' => 'required|string|max:255',
            'kode_buku' => 'required|string|max:255',
        ]);
        $buku = M_buku::where('id_buku', $id)->firstOrFail();
        // if ($request->kode_buku !== $buku->kode_buku) {
        //     $request->validate([
        //         'kode_buku' => 'unique:tb_buku,kode_buku,' . $id,
        //     ]);
        // }
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->gendre = $request->gendre;
        $buku->sinopsis = $request->sinopsis;
        $buku->kategori = $request->kategori;
        $buku->kode_buku = $request->kode_buku;
        $buku->save();
        return redirect()->route('kelola-buku')->with('success', 'Data buku berhasil diperbarui.');
    }
    public function delete($id)
    {
        // Temukan buku berdasarkan ID
        $buku = M_buku::findOrFail($id);
        // Hapus buku
        $buku->delete();

        // Simpan pesan berhasil ke dalam session
        return redirect()->back()->with('success', 'Data buku ' . $buku->nama . ' berhasil dihapus');
    }
}
