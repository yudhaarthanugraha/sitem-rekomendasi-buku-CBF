<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controller_dashboard extends Controller
{
    //
    public function show()
    {
        $user = Auth::user();
        $title = 'Dashboard';
        return view('admin.dashboard.index', compact('user', 'title'));
    }
}
