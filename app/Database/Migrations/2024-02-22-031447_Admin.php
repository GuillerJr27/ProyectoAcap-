<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idUsuario' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombreUsuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'apellidoUsuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'correo' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'unique'     => true
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
                'unique'     => true
            ],
            'estado' => [
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
        $this->forge->addKey('idUsuario', true);
        $this->forge->createTable('configuracion');
    }

    public function down()
    {
        $this->forge->dropTable('configuracion');
    }
}