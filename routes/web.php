<?php

use App\Http\Controllers\controller_auth;
use App\Http\Controllers\controller_buku;
use App\Http\Controllers\controller_dashboard;
use App\Http\Controllers\controller_kategori;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// pengunjung routes
Route::get('/', [controller_auth::class, 'show'])->name('login');
Route::post('/login', [controller_auth::class, 'login'])->name('auth');

// admin routes
// Route::middleware(['auth'])->group(function () {
// Rute yang memerlukan autentikasi di sini
// Tambahkan rute lain yang memerlukan autentikasi di sini
Route::get('/dashboard', [controller_dashboard::class, 'show'])->name('dashboard');
Route::get('/logout', [controller_auth::class, 'logout'])->name('logout');
Route::get('/kelola/siswa', [controller_auth::class, 'logout'])->name('kelola-siswa');
Route::get('/kelola-buku', [controller_buku::class, 'show'])->name('kelola-buku');
Route::get('/kelola-kategori', [controller_kategori::class, 'show'])->name('kelola-kategori');;
// });
