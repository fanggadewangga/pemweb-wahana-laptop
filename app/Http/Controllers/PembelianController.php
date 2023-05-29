<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Pembelian();
    }

    public function getAllPembelian()
    {
        $result = $this->model->getAllPembelian();
        return view('pembelian.pembelian', ['pembelian' => $result]);
    }
}
