<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = ['id_barang', 'jenis_barang', 'merk_barang', 'tipe_barang', 'spesifikasi', 'tanggal_masuk_gudang', 'foto_barang', 'garansi', 'stok', 'harga_satuan', 'kelengkapan'];

    // Method untuk mengambil data barang
    public function getBarang()
    {
        $result = DB::table($this->table)->get();
        return $result;
    }

    // Method untuk menambahkan data barang
    public function addBarang($id_barang, $jenis_barang, $merk_barang, $tipe_barang, $spesifikasi, $tanggal_masuk_gudang, $foto_barang, $garansi, $stok, $harga_satuan, $kelengkapan)
    {
        $data = [
            'id_barang' => $id_barang,
            'jenis_barang' => $jenis_barang,
            'merk_barang' => $merk_barang,
            'tipe_barang' => $tipe_barang,
            'spesifikasi' => $spesifikasi,
            'tanggal_masuk_gudang' => $tanggal_masuk_gudang,
            'foto_barang' => $foto_barang,
            'garansi' => $garansi,
            'stok' => $stok,
            'harga_satuan' => $harga_satuan,
            'kelengkapan' => $kelengkapan
        ];

        $result = DB::table($this->table)->insert($data);
        return $result;
    }

    // Method untuk mengambil satu data barang berdasarkan ID
    public function getBarangById($id_barang)
    {
        $result = DB::table($this->table)->where('id_barang', $id_barang)->first();
        return $result;
    }

    // Method untuk menghapus data barang
    public function deleteBarang($id_barang)
    {
        $result = DB::table($this->table)->where('id_barang', $id_barang)->delete();
        return $result;
    }

    // Method untuk mencari barang berdasarkan nama
    public function searchBarang($keyword)
    {
        $result = DB::table($this->table)->where('jenis_barang', 'LIKE', "%$keyword%")->orWhere('merk_barang', 'LIKE', "%$keyword%")->orWhere('tipe_barang', 'LIKE', "%$keyword%")->get();
        return $result;
    }
    // Method untuk mengedit atau update data barang
    public function updateBarang($id_barang, $data)
    {
        $result = DB::table($this->table)->where('id_barang', $id_barang)->update($data);
        return $result;
    }
}
