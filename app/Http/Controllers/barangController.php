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
        return view('catalog.catalog', ['barang' => $barang]);
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

    public function addBarang(Request $request)
    {
        // Validasi data yang diterima dari permintaan
        $request->validate([
            'id_barang' => 'required',
            'tanggal_masuk_gudang' => 'required',
            'jenis_barang' => 'required',
            'garansi' => 'required',
            'merk_barang' => 'required',
            'stok' => 'required|numeric',
            'foto_barang' => 'required',
            'spesifikasi' => 'required',
            'kelengkapan' => 'required',
            'tipe_barang' => 'required',
            'harga_satuan' => 'required'
        ]);

        // Buat instance Barang baru dan atur nilainya berdasarkan data yang diterima dari permintaan
        $id_barang = $request->input('id_barang');
        $tanggal_masuk_gudang = $request->input('tanggal_masuk_gudang');
        $jenis_barang = $request->input('jenis_barang');
        $garansi = $request->input('garansi');
        $merk_barang = $request->input('merk_barang');
        $stok = $request->input('stok');
        $foto_barang = $request->input('foto_barang');
        $spesifikasi = $request->input('spesifikasi');
        $kelengkapan = $request->input('kelengkapan');
        $tipe_barang = $request->input('tipe_barang');
        $harga_satuan = $request->input('harga_satuan');

        $this->model->addBarang($id_barang, $jenis_barang,  $merk_barang, $tipe_barang, $spesifikasi, $tanggal_masuk_gudang, $foto_barang, $garansi, $stok, $harga_satuan, $kelengkapan);

        // Redirect ke halaman atau berikan respon sesuai kebutuhan aplikasi Anda
        return redirect('/barang/all')->with('success', 'Barang berhasil ditambahkan');
    }


    public function deleteBarang($id)
    {
        $this->model->deleteBarang($id);
        return redirect('/barang/all')->with('success', 'Barang berhasil dihapus');
    }
}
