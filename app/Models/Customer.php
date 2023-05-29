<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $fillable = ['id_customer', 'nomor_telepon', 'nama_customer'];

    // Method untuk mengambil data customer
    public function getAllCustomer()
    {
        $result = DB::table($this->table)->get();
        return $result;
    }

    // Method untuk mencari customer berdasarkan nama
    public function searchCustomer($keyword)
    {
        $result = DB::table($this->table)->where('nama_customer', 'LIKE', "%$keyword%")->get();
        return $result;
    }
}
