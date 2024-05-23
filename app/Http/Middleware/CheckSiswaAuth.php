<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSiswaAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna terautentikasi
        if (!Auth::check()) {
            // Jika pengguna tidak terautentikasi, alihkan ke halaman login
            return redirect()->route('login')->with('error', 'Anda harus login untuk mendapatkan akses halaman.');
        }

        // Periksa apakah pengguna memiliki peran 'siswa'
        if (Auth::user()->role !== 'siswa') {
            // Jika pengguna tidak memiliki peran 'siswa', alihkan ke halaman login atau halaman lain yang sesuai
            return redirect()->route('login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Jika pengguna yang terautentikasi memiliki peran 'siswa', lanjutkan permintaan
        return $next($request);
    }
}
