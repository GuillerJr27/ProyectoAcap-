<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rol extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idRol' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombreRol' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'descripcionRol' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
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
        $this->forge->addKey('idRol', true);
        $this->forge->createTable('rol');
    }

    public function down()
    {
        $this->forge->dropTable('rol');
    }
}