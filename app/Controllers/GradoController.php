<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class GradoController extends BaseController
{
    public function index()
    {
        return view('grado/index');
    }
}