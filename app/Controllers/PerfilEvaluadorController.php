<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PerfilEvaluadorController extends BaseController
{
    public function index()
    {
        return view('perfilevaluador/index');
    }
}