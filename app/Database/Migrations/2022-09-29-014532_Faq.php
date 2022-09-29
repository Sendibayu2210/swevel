<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faq extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'from' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'question' => [
                'type' => 'text',
            ],
            'answer' => [
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
        $this->forge->createTable('faq', true);
    }

    public function down()
    {
        $this->forge->dropTable('faq');
    }
}
