<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {   
            // Jika pengguna tidak terautentikasi, alihkan ke halaman login
            return redirect()->route('login')->with('error', 'Anda harus login untuk mendapatkan akses halaman.');
        }

        // Periksa apakah pengguna memiliki peran 'admin'
        if (Auth::user()->role !== 'admin') {
            // Jika pengguna tidak memiliki peran 'admin', alihkan ke halaman login atau halaman lain yang sesuai
            return redirect()->route('login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }
}
