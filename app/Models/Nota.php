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
}
