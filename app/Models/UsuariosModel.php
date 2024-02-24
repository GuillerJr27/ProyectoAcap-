<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table            = 'Usuario';
    protected $primaryKey       = 'idUsuario';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombreUsuario', 'apellidoUsuario', 'correo', 'contrasena', 'usuario', 'estado', 'idRol'];

    protected bool $allowEmptyInserts = false;


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}