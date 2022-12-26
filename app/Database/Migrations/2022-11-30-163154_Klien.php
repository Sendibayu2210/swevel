<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Klien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment'=> true,
            ],
            'gambar' => [
                'type' => 'varchar',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('klien',true);
    }

    public function down()
    {
        $this->forge->dropTable('klien');
    }
}
