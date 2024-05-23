<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckDefault
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
            // Jika pengguna tidak terautentikasi, lanjutkan ke permintaan berikutnya (login atau auth)
            return $next($request);
        }

        // Jika pengguna terautentikasi, arahkan ke halaman yang sesuai berdasarkan peran
        if (Auth::user()->role == 'admin') {
            return redirect()->route('dashboard');
        } elseif (Auth::user()->role == 'siswa') {
            return redirect()->route('landing_page');
        }

        // Jika tidak ada peran yang cocok, lanjutkan permintaan
        return $next($request);
    }
}
