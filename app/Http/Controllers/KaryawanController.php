<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class KaryawanController extends Controller
{
    public $model;

    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.register');
    }

    public function __construct(Karyawan $model)
    {
        $this->model = $model;
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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
            // Authentikasi berhasil, redirect ke halaman /dashboard

        } else {
            // Authentikasi gagal, redirect ke halaman login dengan pesan error
            return redirect()->back()->withErrors([
                'password' => 'Incorrect credentials',
            ])->withInput($request->except('password'));
        }
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                Password::min(8)
                -> letters()
                -> numbers()
                -> mixedCase()
                -> uncompromised(),
            ],
        ]);
    
        // Create a new user
        $user = Karyawan::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
    
        // Redirect the user to a specific page
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully');
    }

    public function addKaryawan(Request $request)
    {

        // Buat instance Barang baru dan atur nilainya berdasarkan data yang diterima dari permintaan
        $validatedData = $request->validate([
            'id_karyawan' => 'required',
            'nama_karyawan' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $id_karyawan = $validatedData['id_karyawan'];
        $nama_karyawan = $validatedData['nama_karyawan'];
        $email = $validatedData['email'];
        $password = Hash::make($validatedData['password']);

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
