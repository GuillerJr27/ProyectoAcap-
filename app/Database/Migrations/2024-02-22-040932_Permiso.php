<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Permiso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPermiso' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'insertar' => [
                'type'       => 'int',
                'constraint' => '1',
            ],
            'visualizar' => [
                'type'       => 'int',
                'constraint' => '1',
            ],
            'actualizar' => [
                'type'       => 'int',
                'constraint' => '1',
            ],
            'eliminar' => [
                'type'       => 'int',
                'constraint' => '1',
            ],
            'descargar' => [
                'type'       => 'int',
                'constraint' => '1',
            ],
            'created_at' => [
                'type'       => 'DATETIME'
            ],
            'updated_at' => [
                'type'       => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('idPermiso', true);
        $this->forge->createTable('permiso');
    }

    public function down()
    {
        $this->forge->dropTable('permiso');
    }
}