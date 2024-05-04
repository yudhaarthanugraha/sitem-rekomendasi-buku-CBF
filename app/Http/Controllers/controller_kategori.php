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
        $categorys = M_kategori::all()->toArray();
        return view('admin.kategori.index', compact('categorys', 'user'));
    }
}
