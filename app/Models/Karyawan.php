<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Karyawan extends Authenticatable
{
    protected $table = 'karyawan';

    protected $fillable = ['id_karyawan', 'nama_karyawan', 'email', 'password'];

    // Method untuk mengambil data karyawan
    public function getKaryawan()
    {
        $result = DB::table($this->table)->get();
        return $result;
    }

    // Method untuk menambahkan data karyanwan (Sign Up)
    public function addKaryawan($id_karyawan, $nama_karyawan, $email, $password)
    {
        $data = [
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => $nama_karyawan,
            'email' => $email,
            'password' => Hash::make($password),
        ];

        $result = DB::table($this->table)->insert($data);
        return $result;
    }


    // Method untuk mencari karyawan berdasarkan nama
    public function searchKaryawan($keyword)
    {
        $result = DB::table($this->table)->where('nama_karyawan', 'LIKE', "%$keyword%")->orWhere('email', 'LIKE', "%$keyword%")->get();
        return $result;
    }

    public function updateKaryawan($id_karyawan, $data)
    {
        $result = DB::table($this->table)->where('id_karyawan', $id_karyawan)->update($data);
        return $result;
    }

    public function getKaryawanById($id_karyawan)
    {
        $result = DB::table($this->table)->where('id_karyawan', $id_karyawan)->first();
        return $result;
    }

    public function deleteKaryawan($id_karyawan)
    {
        $result = DB::table($this->table)->where('id_karyawan', $id_karyawan)->delete();
        return $result;
    }
}
