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
            print("Berhasil");
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

    public function addKaryawan(Request $request)
    {

        // Buat instance Barang baru dan atur nilainya berdasarkan data yang diterima dari permintaan
        $id_karyawan = $request->input('id_karyawan');
        $nama_karyawan = $request->input('nama_karyawan');
        $email = $request->input('email');
        $password = $request->input('password');

        $this->model->addKaryawan( $id_karyawan, $nama_karyawan,  $email, $password);

        // Redirect ke halaman atau berikan respon sesuai kebutuhan aplikasi Anda
        return redirect('/karyawan/all')->with('success', 'Karyawan berhasil ditambahkan');
    }
    public function updateKaryawan(Request $request)
    {
        $id_karyawan = $request->input('id_karyawan');
        $nama_karyawan = $request->input('nama_karyawan');
        $email = $request->input('email');
        $password = $request->input('password');

        $data = [
            'id_karyawan' => $id_karyawan,
            'nama_karyawan' => $nama_karyawan,
            'email' => $email,
            'password' => $password,
        ];

        // Sesuaikan dengan nama model yang Anda gunakan
        $result = $this->model->updateKaryawan($id_karyawan, $data);

        if ($result) {
            return redirect('/karyawan/all')->with('success', 'Karyawan berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui karyawan.');
        }
    }

    public function getKaryawanById($id_karyawan)
    {
        $karyawan = $this->model->getKaryawanById($id_karyawan);
        return response()->json($karyawan);
    }

    public function deleteKaryawan($id_karyawan)
    {
        $this->model->deleteKaryawan($id_karyawan);
        return redirect('/karyawan/all')->with('success', 'Karyawan berhasil dihapus');
    }

}
