<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerloginadmin extends Controller
{
    //
    public function show()
    {
        return view('pengunjung.auth.login');
    }
}
