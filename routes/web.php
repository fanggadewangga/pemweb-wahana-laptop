<?php

use App\Http\Controllers\BarangController;
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

Route::get('/catalog', [BarangController::class, 'catalog']);

Route::get('/catalog/search', [BarangController::class, 'searchBarang']);

Route::get('/barang/all', [BarangController::class, 'index']);

Route::get('/barang/detail/{id_barang}', [BarangController::class, 'getDetail']);

Route::get('/barang/search', [BarangController::class, 'searchBarang']);

Route::delete('/barang/delete/{id_barang}', [BarangController::class, 'deleteBarang']);

Route::post('/barang/add', [BarangController::class, 'addBarang']);

Route::post('/barang/update/{id_barang}', [BarangController::class, 'updateBarang']);

// Rute untuk AJAX
Route::get('/get-data/{id_barang}', [BarangController::class, 'getBarangById']);
