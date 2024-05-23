<?php

use App\Http\Controllers\controller_auth;
use App\Http\Controllers\controller_buku;
use App\Http\Controllers\controller_buku_siswa;
use App\Http\Controllers\controller_dashboard;
use App\Http\Controllers\controller_kategori;
use App\Http\Controllers\controller_pinjam_buku;
use App\Http\Controllers\controller_user;
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
Route::middleware(['checkDefault'])->group((
    function () {
        Route::get('/', [controller_auth::class, 'show'])->name('login');
        Route::post('/', [controller_auth::class, 'login'])->name('auth');
    }
));
Route::post('/logout', [controller_auth::class, 'logout'])->name('logout');
Route::middleware(['checkAuthAdmin'])->group(
    function () {
        // admin routes start
        Route::get('/dashboard', [controller_dashboard::class, 'show'])->name('dashboard');

        // route buku
        Route::get('/kelola-buku', [controller_buku::class, 'show'])->name('kelola-buku');
        Route::get('/kelola-buku/{id}/edit', [controller_buku::class, 'edit'])->name('edit_buku');
        Route::post('/kelola-buku', [controller_buku::class, 'create'])->name('store_buku');
        Route::put('/kelola-buku/{id}/edit', [controller_buku::class, 'update'])->name('update_buku');
        Route::delete('/kelola-buku/{id}', [controller_buku::class, 'delete'])->name('delete_buku');

        // kelola siswa
        Route::get('/kelola/siswa', [controller_user::class, 'getAllUsers'])->name('kelola_siswa');
        Route::post('/kelola/siswa', [controller_user::class, 'createSiswa'])->name('store_siswa');
        Route::get('/kelola/siswa/{id}/edit', [controller_user::class, 'editSiswa'])->name('edit_siswa');
        Route::put('/kelola/siswa/{id}/edit', [controller_user::class, 'updateSiswa'])->name('update_siswa');
        Route::delete('/kelola/siswa/{id}', [controller_user::class, 'deleteSiswa'])->name('delete_siswa');

        // route kategori
        Route::get('/kelola-kategori', [controller_kategori::class, 'show'])->name('kelola_kategori');
        Route::get('/kelola-kategori/{id}/edit', [controller_kategori::class, 'edit'])->name('edit_kategori');
        Route::put('/kelola-kategori/{id}/edit', [controller_kategori::class, 'update'])->name('update_kategori');
        Route::post('/kelola-kategori', [controller_kategori::class, 'create'])->name('store_kategori');
        Route::delete('/kelola-kategori/{id}', [controller_kategori::class, 'delete'])->name('delete_kategori');

        // pinjam buku
        Route::get('/kelola-pinjam-buku/{id}/pinjam', [controller_pinjam_buku::class, 'show'])->name('pinjam_buku');
        Route::post('/kelola-pinjam-buku/pinjam', [controller_pinjam_buku::class, 'create'])->name('store_pinjam_buku');
        Route::get('/kelola-pinjam-buku/{id}/kembali-buku', [controller_pinjam_buku::class, 'kembali_buku'])->name('kembali_buku');
        Route::put('/kelola-pinjam-buku/{id}/pinjam', [controller_pinjam_buku::class, 'update_kembali_buku'])->name('update_kembali_buku');
        // Admin routes end
    }
);
// Siswa routes start
Route::middleware(['checkAuthSiswa'])->group(
    function () {
        Route::get('/landing_page', [controller_dashboard::class, 'dashboardSiswa'])->name('landing_page');
        Route::get('/list_book/{letter?}', [controller_dashboard::class, 'booksList'])->name('list_book');
        Route::get('/detail-book/{id}', [controller_dashboard::class, 'detailBook'])->name('detail');
        Route::get('/search', [controller_buku::class, 'search'])->name('search');
    }
);
// Siswa routes end