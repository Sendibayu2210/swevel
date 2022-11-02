<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class Kelolapembayaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_bank' => 'BCA',
                'no_rekening' => 'BCA-489379234',
                'gambar' => 'BCA.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama_bank' => 'BNI',
                'no_rekening' => 'BNI-489379234',
                'gambar' => 'BNI.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama_bank' => 'BRI',
                'no_rekening' => 'BRI-489379234',
                'gambar' => 'BRI.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama_bank' => 'Mandiri',
                'no_rekening' => 'Mandiri-489379234',
                'gambar' => 'Mandiri.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama_bank' => 'BSI',
                'no_rekening' => 'BSI-489379234',
                'gambar' => 'BSI.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('kelola_pembayaran')->insertBatch($data);
    }
}
