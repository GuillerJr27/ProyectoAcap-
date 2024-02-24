<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    private $reglas, $usuarios, $session;

    public function __construct()
    {
        helper(['form']);
        $this->usuarios = new UsuariosModel();
        $this->session = session();
    }

    public function validar()
    {
        $this->reglas = [
            'usuario' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es requerido'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es requerido'
                ]
            ],
        ];

        if ($this->request->is('post') && $this->validate($this->reglas)) {
            $result = $this->usuarios->where([
                'usuario' =>  $this->request->getVar('usuario'),
                'estado' => '1',
            ])->first();

            if ($result != null) {
                if (password_verify($this->request->getVar('password'), $result['contrasena'])) {
                    $datos = [
                        'isUsuario' => $result['idUsuario'],
                        'usuario' => $result['usuario'],
                        'nombreUsuario' => $result['nombreUsuario'],
                    ];
                    $this->session->set($datos);
                    return redirect()->to(base_url('admin'))->with('respuesta', [
                        'type' => 'success',
                        'msg' => 'BIENVENIDO',
                    ]);
                } else {
                    return redirect()->to(base_url())->with('respuesta', [
                        'type' => 'danger',
                        'msg' => 'CONTRASEÑA INCORRECTA',
                    ]);
                }
            } else {
                return redirect()->to(base_url())->with('respuesta', [
                    'type' => 'danger',
                    'msg' => 'EL USUARIO NO EXISTE',
                ]);
            }
        } else {
            $data['validator'] = $this->validator;
            return view('index', $data);
        }
    }
}