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
        return $this->model->getCustomer();
    }

}
