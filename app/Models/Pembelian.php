<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';

    protected $fillable = ['id_nota', 'id_barang', 'jumlah_beli', 'harga_total'];

    public static function getAllPembelian()
    {
        return DB::table('pembelian')
            ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
            ->select('pembelian.*', 'barang.merk_barang', 'barang.tipe_barang')
            ->get();
    }
}
