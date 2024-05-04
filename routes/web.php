<?php

use App\Http\Controllers\controller_auth;
use App\Http\Controllers\controller_buku;
use App\Http\Controllers\controller_dashboard;
use App\Http\Controllers\controller_kategori;
use App\Http\Controllers\controllerbook;
use App\Http\Controllers\controllerbookadmin;
use App\Http\Controllers\controllerdashboard;
use App\Http\Controllers\controllerkategoriadmin;
use App\Http\Controllers\controllerloginadmin;
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
Route::redirect('/', '/login');
Route::get('/login', [controller_auth::class, 'show'])->name('login');
Route::post('/login', [controller_auth::class, 'login'])->name('auth');

// admin routes
Route::middleware(['auth'])->group(function () {
    // Rute yang memerlukan autentikasi di sini
    // Tambahkan rute lain yang memerlukan autentikasi di sini
    Route::get('/dashboard', [controller_dashboard::class, 'show'])->name('dashboard');
    Route::get('/kelola-book', [controller_buku::class, 'show']);
    Route::get('/kelola-kategori', [controller_kategori::class, 'show']);
});


