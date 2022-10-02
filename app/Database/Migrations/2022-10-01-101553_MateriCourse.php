<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MateriCourse extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_materi' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment' => true,
            ],
            'id_course' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'id_sub_course' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            // kategori ini untuk membedakan mana yang termasuk materi, kuis, atau submission
            'kategori' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'bab' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'sub_bab' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'konten_materi' => [
                'type' => 'text',
            ],
            'gambar' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'video' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'file' => [
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
        $this->forge->addKey('id_materi', true);
        $this->forge->createTable('materi_course', true);
    }

    public function down()
    {
        $this->forge->dropTable('materi_course');
    }
}
