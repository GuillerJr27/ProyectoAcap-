<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BitacoraController extends BaseController
{
    public function index()
    {
        return view('bitacora/index');
    }
}