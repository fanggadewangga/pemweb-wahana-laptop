<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {

        $barang = barang::all();

        return view('barang', ['barang' => $barang]);
    }
}
