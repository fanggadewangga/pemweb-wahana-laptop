<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PembelianController;
use App\Models\Customer;
use App\Models\Nota;
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

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

//Barang
Route::get('/catalog', [BarangController::class, 'catalog']);
Route::get('/catalog/search', [BarangController::class, 'searchBarang']);
Route::get('/barang/all', [BarangController::class, 'index']);
Route::get('/barang/detail/{id_barang}', [BarangController::class, 'getDetail']);
Route::get('/barang/search', [BarangController::class, 'searchBarang']);
Route::delete('/barang/delete/{id_barang}', [BarangController::class, 'deleteBarang']);
Route::post('/barang/add', [BarangController::class, 'addBarang']);
Route::post('/barang/update/{id_barang}', [BarangController::class, 'updateBarang']);


//Auth
Route::get('/login', function () {return view('auth/login');});
Route::post('/login/auth', [KaryawanController::class, 'login']);
Route::get('/register', function () {return view('auth/register');});


//Karyawan
Route::get('/karyawan/all', [KaryawanController::class, 'getAllKaryawan']);
Route::post('/karyawan/add', [KaryawanController::class, 'addKaryawan']);
Route::get('/karyawan/search', [KaryawanController::class, 'searchKaryawan']);
Route::post('/karyawan/update/{id_karyawan}', [KaryawanController::class, 'updateKaryawan']);
Route::delete('/karyawan/delete/{id_karyawan}', [KaryawanController::class, 'deleteKaryawan']);


//Nota ?
Route::get('/nota/all', [NotaController::class, 'getAllNota']);
Route::get('/nota/search', [NotaController::class, 'getAllNota']);
Route::get('/pembelian/all', [PembelianController::class, 'getAllPembelian']);
Route::get('/pembelian/search', [PembelianController::class, 'getAllPembelian']);


//Customer
Route::get('/customer/all', [CustomerController::class, 'getAllCustomer']);
Route::post('/customer/add', [CustomerController::class, 'addCustomer']);
Route::get('/customer/search', [CustomerController::class, 'searchCustomer']);
Route::post('customer/update/{id_customer}', [CustomerController::class, 'updateCustomer']);
Route::delete('customer/delete/{id_customer}', [CustomerController::class, 'deleteCustomer']);


// Rute untuk AJAX
Route::get('/get-data-barang/{id_barang}', [BarangController::class, 'getBarangById']);
Route::get('/get-data-karyawan/{id_karyawan}', [KaryawanController::class, 'getKaryawanById']);
Route::get('/get-data-customer/{id_customer}', [CustomerController::class, 'getCustomerById']);