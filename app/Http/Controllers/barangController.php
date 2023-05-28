<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Barang();
    }

    public function index()
    {
        $barang = $this->model->getBarang();
        return view('barang.barang', ['barang' => $barang]);
    }

    public function getDetail($id_barang)
    {
        $barang = $this->model->getBarangById($id_barang);
        return view('barang.detailbarang', ['barang' => $barang]);
    }
}
