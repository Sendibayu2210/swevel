<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kontak extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel kontak
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'nomor'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'group' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'provider'      => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => TRUE
            ],
            'updated_at'      => [
                'type'           => 'DATETIME',
                'null'           => TRUE
            ],

        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel kontak
        $this->forge->createTable('kontak');
    }

    public function down()
    {
        //
    }
}
