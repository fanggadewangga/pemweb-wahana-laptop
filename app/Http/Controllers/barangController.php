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

    public function getAllBarang()
    {
        return $this->model->getBarang();
    }

    public function index()
    {
        $barang = $this->getAllBarang();
        return view('barang.barang', ['barang' => $barang]);
    }

    public function catalog()
    {
        $barang = $this->getAllBarang();
        return view('catalog', ['barang' => $barang]);
    }

    public function getDetail($id_barang)
    {
        $barang = $this->model->getBarangById($id_barang);
        return view('barang.detailbarang', ['barang' => $barang]);
    }

    public function searchBarang(Request $request)
    {
        $keyword = $request->input('keyword');

        // Panggil method pencarian pada model Barang
        $result = $this->model->searchBarang($keyword);

        // Cek URL saat ini
        $currentUrl = $request->url();

        // Menentukan view yang akan digunakan berdasarkan URL
        $view = ($currentUrl == url('/catalog/search')) ? 'catalog' : 'barang.barang';

        // Kembalikan hasil pencarian ke view yang sesuai
        return view($view, ['barang' => $result]);
    }



    public function deleteBarang($id)
    {
        $this->model->deleteBarang($id);
    }
}
