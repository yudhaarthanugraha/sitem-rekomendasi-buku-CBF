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
        return view('admin.Dashboard.index', compact('user', 'user'));
    }
}
