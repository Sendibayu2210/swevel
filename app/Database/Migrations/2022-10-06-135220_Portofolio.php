<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portofolio extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'image' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'datetime'
            ],
            'updated_at' => [
                'type' => 'datetime'
            ],
        ]);
        $this->forge->addKey('id', 'true');
        $this->forge->createTable('portofolio', true);
    }

    public function down()
    {
        $this->forge->dropTable('portofolio');
    }
}
