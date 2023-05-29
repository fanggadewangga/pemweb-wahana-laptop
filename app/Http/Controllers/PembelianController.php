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
        return $this->model->getPembelian();
    }
}
