<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }
    public function index(): string
    {
        return view('index');
    }

    public function plantilla(): string
    {
        return view('plantilla');
    }
}