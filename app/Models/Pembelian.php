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

    public static function getPembelian()
    {
    return DB::table('pembelian')
        ->join('barang', 'pembelian.id_barang', '=', 'barang.id_barang')
        ->select('pembelian.*', 'barang.id_barang as id_barang','pembelian.jumlah_beli as jumlah_beli', 'pembelian.harga_total as harga_total')
        ->get();
    }
}
