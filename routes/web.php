<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\KeuanganController;
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

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pendaftaran/create', [DashboardController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran/store', [DashboardController::class, 'store'])->name('dashboardController.store');
    Route::get('/find-customer', [DashboardController::class, 'find'])->name('findCustomer');
    
    Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksi');
    Route::get('/transaksi/create', [TransactionController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi/store', [TransactionController::class, 'store'])->name('transaksi.store');
    Route::get('/pencarian_pelanggan', [TransactionController::class, 'cariPelanggan'])->name('pencarian_pelanggan');


    Route::get('/keuangan/create', [KeuanganController::class, 'create'])->name('keuangan.create');
    Route::post('/keuangan/store', [KeuanganController::class, 'store'])->name('keuangan.store');
    Route::get('/keuangan', [KeuanganController::class, 'index'])->name('keuangan.index');
    Route::get('/invoice/{id}', [KeuanganController::class, 'show'])->name('invoice.show');
});