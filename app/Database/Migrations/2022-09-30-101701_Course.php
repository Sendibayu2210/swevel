<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => "int",
                'constraint' => 5,
                'auto_increment' => true
            ],
            'kategori' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'sub_kategori' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'nama_course' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'slug_course' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'deskripsi' => [
                'type' => 'text',
            ],
            'harga' => [
                'type' => 'int',
                'constraint' => 20,
            ],
            'diskon' => [
                'type' => 'int',
                'constraint' => 20,
            ],
            'gambar' => [
                'type' => 'varchar',
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
        $this->forge->createTable('course', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('course');
    }
}
