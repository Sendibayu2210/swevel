<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provider extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel provider
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_provider'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel provider
        $this->forge->createTable('provider', TRUE);
    }

    public function down()
    {
        //
    }
}
