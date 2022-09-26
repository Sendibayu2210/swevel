<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profile extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'description' => [
                'type' => 'text',
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
        $this->forge->createTable('profile', true);
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}
