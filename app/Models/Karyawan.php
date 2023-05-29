<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Karyawan extends Authenticatable
{
    use HasFactory;
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
            'password' => $password,
        ];

        $result = DB::table($this->table)->insert($data);
        return $result;
    }

    // Method untuk login dengan email dan password
    public function login($email, $password)
    {
        $karyawan = DB::table($this->table)
            ->where('email', $email)
            ->first();

        if (!$karyawan) {
            // Jika email tidak ditemukan
            return false;
        }

        // Verifikasi password
        if (password_verify($password, $karyawan->password)) {
            // Password cocok, return data karyawan
            return $karyawan;
        } else {
            // Password tidak cocok
            return false;
        }
    }

    public function searchKaryawan($keyword)
    {
        $result = DB::table($this->table)->where('nama_karyawan', 'LIKE', "%$keyword%")->orWhere('email', 'LIKE', "%$keyword%")->get();
        return $result;
    }
}
