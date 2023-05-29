<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Karyawan();
    }

    public function getAllKaryawan()
    {
        return $this->model->getKaryawan();
    }

    

}
