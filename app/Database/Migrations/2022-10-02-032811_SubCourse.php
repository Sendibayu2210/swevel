<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubCourse extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sub_course' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment' => true
            ],
            'id_course' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'slug_sub_course' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'deskripsi' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'step' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'level' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
            'hours' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id_sub_course', true);
        $this->forge->createTable('sub_course');
    }

    public function down()
    {
        $this->forge->dropTable('sub_course');
    }
}
