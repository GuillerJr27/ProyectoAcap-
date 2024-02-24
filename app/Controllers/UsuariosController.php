<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new UsuariosModel();
        helper(['form']);
    }
    public function index()
    {
        return view('usuarios/index');
    }

    public function profile()
    {
        return view('usuarios/profile');
    }

    // public function listar()
    // {
    //     $this->usuarios->select('usuario.idUsuario, usuario.nombreUsuario, usuario.apellidoUsuario, usuario.usuario, rol.nombreRol As Rol');
    //     $data = $this->usuarios->join('rol', 'usuario.idRol = rol.idUsuario')->where('usuario.estado', '1')->findAll();
    //     echo json_encode($data);
    //     die();
    // }
    public function listar()
    {
        $this->usuarios->select('usuario.idUsuario, usuario.nombreUsuario, usuario.apellidoUsuario, usuario.usuario, rol.nombreRol AS nombreRol, usuario.estado');

        $data = $this->usuarios->join('rol', 'usuario.idRol = rol.idRol')->findAll();

        echo json_encode($data);
        die();
    }
}