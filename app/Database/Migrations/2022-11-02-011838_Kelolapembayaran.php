<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelolapembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => '5',
                'auto_increment'=> true,
            ],
            'nama_bank' => [
                'type' => 'varchar',
                'constraint' => 100,                
            ],
            'no_rekening' => [
                'type' => 'varchar',
                'constraint' => 100,                
            ],
            'gambar' => [
                'type' => 'varchar',
                'constraint' => 100,                
            ],            
            'created_at' => [
                'type' => 'datetime',                                
            ],            
            'updated_at' => [
                'type' => 'datetime',                                
            ],                        
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('kelola_pembayaran',true);
    }

    public function down()
    {
        $this->forge->dropTable('kelola_pembayaran');
    }
}
