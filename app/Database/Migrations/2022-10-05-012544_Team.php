<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Team extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'jabatan' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'image' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'linkedin' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'instagram' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'facebook' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable('team', true);
    }

    public function down()
    {
        $this->forge->dropTable('team');
    }
}
