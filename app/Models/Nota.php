<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'nota';

    protected $fillable = ['id_nota', 'id_customer', 'id_karyawan', 'tanggal_transaksi'];

    public static function getAllNota()
    {
        return DB::table('nota')
            ->join('customer', 'nota.id_customer', '=', 'customer.id_customer')
            ->join('karyawan', 'nota.id_karyawan', '=', 'karyawan.id_karyawan')
            ->select('nota.*', 'customer.nama_customer as nama_customer', 'karyawan.nama_karyawan as nama_karyawan',)
            ->get();
    }
    // Method untuk mengambil data nota berdasarkan ID
    public static function getNotaById($id_nota)
    {
        $nota = DB::table('nota')
            ->join('customer', 'nota.id_customer', '=', 'customer.id_customer')
            ->join('karyawan', 'nota.id_karyawan', '=', 'karyawan.id_karyawan')
            ->join('pembelian', 'nota.id_nota', '=', 'pembelian.id_nota')
            ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
            ->select(
                'nota.id_nota',
                'nota.tanggal_transaksi',
                'karyawan.nama_karyawan as nama_karyawan',
                'customer.nama_customer as nama_customer',
                'barang.jenis_barang',
                'barang.merk_barang',
                'barang.tipe_barang',
                'barang.harga_satuan',
                'pembelian.jumlah_beli',
                'pembelian.harga_total'
            )
            ->where('nota.id_nota', $id_nota)
            ->first();

        return $nota;
    }
}
