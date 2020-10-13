<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use Illuminate\Auth\Middleware\Authenticate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest')->name('daftar');
Route::get('/verifikasi', [OrderController::class, 'verifikasi'])->middleware('auth')->name('verifikasi');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/order', [OrderController::class, 'order'])->name('order');
Route::post('/verifikasi', [OrderController::class, 'verifikasi_store'])->name('verifikasi_store');