<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KaryawanController;
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
    return view('welcome');
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


//Customer
Route::get('/customer/all', [CustomerController::class, 'getAllCustomer']);
Route::get('/customer/search', [CustomerController::class, 'searchCustomer']);

// Rute untuk AJAX
Route::get('/get-data-barang/{id_barang}', [BarangController::class, 'getBarangById']);
Route::get('/get-data-karyawan/{id_karyawan}', [KaryawanController::class, 'getKaryawanById']);