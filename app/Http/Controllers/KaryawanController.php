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
        $data = $this->karyawanInput($request);
        
        $result = $this->model->addKaryawan($data);
    
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully');
    }
    
    public function karyawanInput(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                Password::min(8)
                -> letters()
                -> numbers()
                -> mixedCase(),
            ],
            'id_karyawan' => 'sometimes|string',
        ]);

        $data = [
            'id_karyawan' => $request->filled('id_karyawan') ? $request->id_karyawan : 'K000',
            'nama_karyawan' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ];

        return $data;
    }

    public function addKaryawan(Request $request)
    {
        $data = $this->karyawanInput($request);
        
        $result = $this->model->addKaryawan($data);

        if ($result) {
            return redirect('/karyawan/all')->with('success', 'Karyawan berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan karyawan.');
        }
    }

    public function updateKaryawan(Request $request)
    {
        $data = $this->karyawanInput($request);

        $result = $this->model->updateKaryawan($data);

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
