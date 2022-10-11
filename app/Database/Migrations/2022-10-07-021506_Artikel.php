<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_artikel' => [
                'type' => 'int',
                'constraint' => 5,
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'deskripsi' => [
                'type' => 'text'
            ],
            'gambar' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'kategori' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'pembuat' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'tanggal' => [
                'type' => 'date',
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at' => [
                'type' => 'datetime',
            ],
        ]);
        $this->forge->addKey('id_artikel', true);
        $this->forge->createTable('artikel', true);
    }

    public function down()
    {
        $this->forge->dropTable('artikel');
    }
}
