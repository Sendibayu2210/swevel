<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Milestone extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'year' => [
                'type' => 'VARCHAR',
                'constraint' => 4,
            ],
            'description' => [
                'type' => 'text',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('milestone', true);
    }

    public function down()
    {
        $this->forge->dropTable('milestone');
    }
}
