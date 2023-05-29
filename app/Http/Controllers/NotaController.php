<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Nota();
    }

    public function getAllNota()
    {
        $result = $this->model->getAllNota();
        return view('nota.nota', ['nota' => $result]);
    }
}
