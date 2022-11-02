<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Purchase extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_user' => '2',
                'id_course' => '1',
                'id_bank' => '1',
                'kode_promo' => '',
                'harga_bayar' => 500000,
                'status' => 'approved',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('purchase')->insertBatch($data);
    }
}
