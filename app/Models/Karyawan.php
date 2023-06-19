<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Karyawan extends Authenticatable
{
    protected $table = 'karyawan';

    protected $guard = 'web';
    
    protected $fillable = ['id_karyawan', 'nama_karyawan', 'email', 'password'];

    // Method untuk mengambil data karyawan
    public function getKaryawan()
    {
        $result = DB::table($this->table)->get();
        return $result;
    }

    public function getAuthIdentifier()
    {
        return $this->id_karyawan;
    }

    public function getAuthIdentifierName()
    {
        return 'id_karyawan';
    }
    // Method untuk menambahkan data karyanwan (Sign Up)
    public function addKaryawan($data)
    {
        $data = [
            'id_karyawan' => $this->generateNextIndex(),
            'nama_karyawan' => $data['nama_karyawan'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        $result = DB::table($this->table)->insert($data);
        return $result;
    }
    

    public function generateNextIndex()
    {
        $latestKaryawan = DB::table($this->table)->latest('id_karyawan')->first();

        if ($latestKaryawan) {
            $latestIndex = (int) Str::after($latestKaryawan->id_karyawan, 'K');
            $nextIndex = $latestIndex + 1;
        } else {
            $nextIndex = 1;
        }

        return 'K' . str_pad($nextIndex, 3, '0', STR_PAD_LEFT);
    }


    // Method untuk mencari karyawan berdasarkan nama
    public function searchKaryawan($keyword)
    {
        $result = DB::table($this->table)->where('nama_karyawan', 'LIKE', "%$keyword%")->orWhere('email', 'LIKE', "%$keyword%")->get();
        return $result;
    }

    public function updateKaryawan($data)
    {
        $result = DB::table($this->table)->where('id_karyawan', $data['id_karyawan'])->update($data);
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
