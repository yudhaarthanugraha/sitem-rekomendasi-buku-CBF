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

    // siswa dashboard
    public function dashboardSiswa()
    {
        $user = Auth::user();
        $title = 'Landing Page';

        return view('siswa.dashboard.index', compact('user', 'title'));
    }
}
