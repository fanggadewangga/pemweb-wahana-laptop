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
        return $this->model->getNota();
    }
}
