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

        // Panggil method pencarian pada model Barang
        $result = $this->model->searchCustomer($keyword);


        // Kembalikan hasil pencarian ke view yang sesuai
        return view('customer.customer', ['customer' => $result]);
    }
}
