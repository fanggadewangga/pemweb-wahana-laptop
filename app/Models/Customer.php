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

     // Method untuk menghapus data customer berdasarkan ID
    public function deleteCustomer($id_customer)
    {
        $result = DB::table('customer')->where('id_customer', $id_customer)->delete();
        return $result;
    }

     // Method untuk menambahkan data customer
    public function addCustomer($id_customer, $nama_customer, $nomor_telepon)
    {
        $data = [
            'id_customer' => $id_customer,
            'nomor_telepon' => $nama_customer,
            'nama_customer' => $nomor_telepon,
        ];

        $result = DB::table($this->table)->insert($data);
        return $result;
    }

    // Method untuk mengedit data customer berdasarkan ID
        public function updateCustomer($id_customer, $data)
        {
            $result = DB::table($this->table)->where('id_customer', $id_customer)->update($data);
            return $result;
        }

    public function getCustomerById($id_customer)
    {
        $result = DB::table($this->table)->where('id_customer', $id_customer)->first();
        return $result;
    }
}
