<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PersonasController extends BaseController
{
    public function index()
    {
        return view('personas/index');
    }
}