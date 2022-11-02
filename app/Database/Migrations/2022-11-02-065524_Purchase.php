<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Purchase extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'int',
                'constraint' => '5',
                'auto_increment' => true
            ],
            'id_user' => [
                'type' => 'int',
                'constrint' => '5',
            ],
            'id_course' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'id_bank' => [
                'type' => 'int',
                'constraint' => 5,
            ],
            'kode_promo' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'harga_bayar' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'status' => [
                'type' => 'enum',
                'constraint' => ['approved','notapproved'],
            ],
            'created_at' => [
                'type' => 'datetime',
            ],
            'updated_at'=> [
                'type' => 'datetime',
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('purchase',true);
    }

    public function down()
    {
        $this->forge->dropTable('purchase');
    }
}
