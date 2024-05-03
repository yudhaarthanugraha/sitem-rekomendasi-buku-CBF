<?php

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
Route::get('/', [controllerloginadmin::class, 'show']);

// admin routes
Route::get('/dashboard', [controllerdashboard::class, 'show']);
Route::get('/kelola-book', [controllerbookadmin::class, 'show']);
Route::get('/kelola-kategori', [controllerkategoriadmin::class, 'show']);