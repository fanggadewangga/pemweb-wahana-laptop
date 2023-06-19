<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HashKaryawanPasswordInDB extends Migration
{
    public function up()
    {
        $karyawan = DB::table('karyawan')->get();

        foreach ($karyawan as $data) {
            DB::table('karyawan')->where('id', $data->id)->update([
                'password' => Hash::make($data->password),
            ]);
        }
    }

    public function down()
    {
        $karyawan = DB::table('karyawan')->get();

        foreach ($karyawan as $karyawan) {
            // Revert the hashed passwords back to their original values
            DB::table('karyawan')->where('id', $karyawan->id)->update(['password' => $karyawan->password]);
        }
    }
};
