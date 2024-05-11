<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\M_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class controller_user extends Controller
{
    //show semua data user/siswa
    public function getAllUsers()
    {
        $user = Auth::user();
        $siswas = M_user::where('role', 'siswa')->paginate(10);
        $title = 'Kelola Siswa';

        return view('admin.siswa.index', compact('user', 'title', 'siswas'));
    }

    //edit data siswa
    public function editSiswa($id)
    {
        $title = 'Master Siswa';
        $siswa = M_user::findOrFail($id);

        return view('admin.siswa.edit', compact('title', 'siswa'));
    }

    //create data siswa
    public function createSiswa(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:tb_user',
            'password' => 'required',
        ]);

        $siswa = new M_user();
        $siswa->username = $request->username;
        $siswa->password = Hash::make($request->password);
        $siswa->role = 'siswa';
        $siswa->save();

        return redirect()->route('kelola_siswa')->with('success', 'Data Siswa ' . $request->username . ' berhasil ditambahkan');
    }

    //update data siswa
    public function updateSiswa($id, Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required'
        ]);

        $siswa = M_user::where('id_user', $id)->firstOrFail();
        $siswa->username = $request->username;

        if (!empty($request->password)) {
            $siswa->password = Hash::make($request->password);
        }

        $siswa->save();

        return redirect()->route('kelola_siswa')->with('success', 'Data Siswa berhasil diperbaharui');
    }

    //delete data siswa
    public function deleteSiswa($id)
    {
        $siswa = M_user::findOrFail($id);
        $siswa->delete();

        return redirect()->back()->with('success', 'Data siswa ' . $siswa->nama . ' berhasil dihapus');
    }
}
