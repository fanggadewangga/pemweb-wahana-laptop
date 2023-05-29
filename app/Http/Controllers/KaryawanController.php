<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public $model;

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function __construct()
    {
        $this->model = new Karyawan();
    }

    public function getAllKaryawan()
    {
        $result = $this->model->getKaryawan();
        return view('karyawan.karyawan', ['karyawan' => $result]);
    }

    public function searchKaryawan(Request $request)
    {
        $keyword = $request->input('keyword');

        // Panggil method pencarian pada model Barang
        $result = $this->model->searchKaryawan($keyword);

        // Kembalikan hasil pencarian ke view yang sesuai
        return view('karyawan.karyawan', ['karyawan' => $result]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            print("BVerhasil");
            // Authentikasi berhasil, redirect ke halaman /catalog

        } else {
            print("Gagal");
            // Authentikasi gagal, redirect ke halaman login dengan pesan error
            return redirect()->back()->withError('Invalid credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
