<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PembelianController;
use App\Models\Nota;
use Illuminate\Support\Facades\Route;

// Authorized routes
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {return view('dashboard.dashboard');})->name('dashboard');

    // Barang routes
    Route::get('/catalog', [BarangController::class, 'catalog']);
    Route::get('/catalog/search', [BarangController::class, 'searchBarang']);
    Route::get('/barang/all', [BarangController::class, 'index']);
    Route::get('/barang/detail/{id_barang}', [BarangController::class, 'getDetail']);
    Route::get('/barang/search', [BarangController::class, 'searchBarang']);
    Route::delete('/barang/delete/{id_barang}', [BarangController::class, 'deleteBarang']);
    Route::post('/barang/add', [BarangController::class, 'addBarang']);
    Route::post('/barang/update/{id_barang}', [BarangController::class, 'updateBarang']);

    // Karyawan routes
    Route::get('/karyawan/all', [KaryawanController::class, 'getAllKaryawan']);
    Route::post('/karyawan/add', [KaryawanController::class, 'addKaryawan']);
    Route::get('/karyawan/search', [KaryawanController::class, 'searchKaryawan']);
    Route::post('/karyawan/update/{id_karyawan}', [KaryawanController::class, 'updateKaryawan']);
    Route::delete('/karyawan/delete/{id_karyawan}', [KaryawanController::class, 'deleteKaryawan']);

    // Customer routes
    Route::get('/customer/all', [CustomerController::class, 'getAllCustomer']);
    Route::get('/customer/search', [CustomerController::class, 'searchCustomer']);

    // Nota routes
    Route::get('/nota/all', [NotaController::class, 'getAllNota']);
    Route::get('/nota/search', [NotaController::class, 'getAllNota']);

    // Pembelian routes
    Route::get('/pembelian/all', [PembelianController::class, 'getAllPembelian']);
    Route::get('/pembelian/search', [PembelianController::class, 'getAllPembelian']);

    // AJAX routes
    Route::get('/get-data-barang/{id_barang}', [BarangController::class, 'getBarangById']);
    Route::get('/get-data-karyawan/{id_karyawan}', [KaryawanController::class, 'getKaryawanById']);

    // Log Out
    Route::post('/logout', [KaryawanController::class, 'logout'])->name('logout');
});


// Guest routes
Route::middleware('guest')->group(function(){
    Route::post('/login', [KaryawanController::class, 'login']);
    Route::get('/login', [KaryawanController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [KaryawanController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [KaryawanController::class, 'register']);
});

// Public routes accessible to all users
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login');
    }
});
