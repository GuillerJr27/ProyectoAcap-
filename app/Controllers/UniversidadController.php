<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UniversidadController extends BaseController
{
    public function index()
    {
        return view ('universidad/index');
    }
}