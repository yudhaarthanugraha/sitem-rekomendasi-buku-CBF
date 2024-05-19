<?php

namespace App\Http\Controllers;

use App\Helpers\CBFHelper;
use App\Models\M_buku;
use App\Models\M_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class controller_buku extends Controller
{
    //Menampilkan Buku
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

    // Menambahkan data Buku
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'tahun_terbit' => 'required|string|max:255',
            'gendre' => 'required|string|max:255',
            'sinopsis' => 'required|string|max:500',
            'kategori' => 'required|string|max:500',
            'kode_buku' => 'required|string|max:255|unique:tb_buku',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:10048',
        ]);

        // Tangani penyimpanan gambar yang diunggah
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }
        // Simpan data buku baru ke dalam database
        $buku = new M_buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->gendre = $request->gendre;
        $buku->sinopsis = $request->sinopsis;
        $buku->kategori = $request->kategori;
        $buku->kode_buku = $request->kode_buku;
        $buku->gambar = $imageName;
        $buku->save();
        // Jika penyimpanan berhasil, kembalikan respons berhasil
        return redirect()->route('kelola-buku')->with('success', 'Data buku ' . $request->judul . ' berhasil ditambahkan');
    }

    // Menampilkan view edit Buku
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

    // Mengedit data Buku
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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:10048',
        ]);
        $buku = M_buku::findOrFail($id);
        // Jika terdapat file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($buku->gambar) {
                $gambarPath = public_path('uploads/' . $buku->gambar);
                if (file_exists($gambarPath)) {
                    unlink($gambarPath);
                }
            }
            // Simpan gambar baru dengan nama unik berdasarkan waktu
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            // Set nama gambar baru ke atribut gambar buku
            $buku->gambar = $imageName;
        }

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

    // Menghjapus data Buku
    public function delete($id)
    {
        // Temukan buku berdasarkan ID
        $buku = M_buku::findOrFail($id);
        if ($buku->gambar) {
            $gambarPath = public_path('uploads/' . $buku->gambar);
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
        }
        // Hapus buku
        $buku->delete();

        // Simpan pesan berhasil ke dalam session
        return redirect()->back()->with('success', 'Data buku ' . $buku->nama . ' berhasil dihapus');
    }

    // Pencariaan Menggunakan CBF
    public function search(Request $request)
    {
        $query = $request->input('query');
        $recommendedBooks = CBFHelper::getRecommendations($query);

        return view('books.search_results', compact('recommendedBooks'));
    }
}
