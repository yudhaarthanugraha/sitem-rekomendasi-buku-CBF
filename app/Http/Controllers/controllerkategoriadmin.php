<?php

namespace App\Http\Controllers;

use App\Models\M_kategori;


class controllerkategoriadmin extends Controller
{
    //
    public function show() {
        $categorys = M_kategori::all()->toArray();
        return view('admin.kategori.index', compact('categorys'));
    }
}
