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

    // Method untuk mengambil semua data customer
    public static function getNota()
    {
    return DB::table('nota')
        ->join('customer', 'nota.id_customer', '=', 'customer.id_customer')
        ->join('karyawan', 'nota.id_karyawan', '=', 'karyawan.id_karyawan')
        ->select('nota.*', 'customer.id_customer as id_customer', 'karyawan.id_karyawan as id_karyawan','nota.tanggal_transaksi as tanggal_transaksi')
        ->get();
    }



    

}

