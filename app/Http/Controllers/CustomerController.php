<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Customer();
    }

    public function getAllCustomer()
    {
        $result = $this->model->getAllCustomer();
        return view('customer.customer', ['customer' => $result]);
    }

    public function searchCustomer(Request $request)
    {
        $keyword = $request->input('keyword');

        // Panggil method pencarian pada model Customer
        $result = $this->model->searchCustomer($keyword);


        // Kembalikan hasil pencarian ke view yang sesuai
        return view('customer.customer', ['customer' => $result]);
    }

    public function getCustomerById($id_customer)
    {
        $customer = $this->model->getCustomerById($id_customer);
        return response()->json($customer);
    }

    public function updateCustomer(Request $request)
    {
        $id_customer = $request->input('id_customer');
        $nama_customer = $request->input('nama_customer');
        $nomor_telepon = $request->input('nomor_telepon');

        $data = [
            'id_customer' => $id_customer,
            'nama_customer' => $nama_customer,
            'nomor_telepon' => $nomor_telepon,
        ];

        // Sesuaikan dengan nama model yang Anda gunakan
        $result = $this->model->updateCustomer($id_customer, $data);

        if ($result) {
            return redirect('/customer/all')->with('success', 'Customer berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui customer.');
        }
    }

    public function deleteCustomer($id_customer)
    {
        $this->model->deleteCustomer($id_customer);
        return redirect('/customer/all')->with('success', 'Customer berhasil dihapus');
    }
    public function addCustomer(Request $request)
    {
        // Validasi data yang diterima dari permintaan
        $request->validate([
            'id_customer' => 'required',
            'nama_customer' => 'required',
            'nomor_telepon' => 'required',
        ]);

        // Buat instance Customer baru dan atur nilainya berdasarkan data yang diterima dari permintaan
        $id_customer = $request->input('id_customer');
        $nama_customer = $request->input('nama_customer');
        $nomor_telepon = $request->input('nomor_telepon');

        $this->model->addCustomer($id_customer, $nama_customer,  $nomor_telepon);

    // Redirect ke halaman atau berikan respon sesuai kebutuhan aplikasi Anda
    return redirect('/customer/all')->with('success', 'Customer berhasil ditambahkan');
    }
}
