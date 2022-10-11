<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Artikel extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'judul 1',
                'deskripsi' => 'deskripsi 2',
                'gambar' => 'default',
                'pembuat' => 'jfadl',
                'tanggal' => 'lkadjlsjf',
                'kategori' => 'kategori',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('artikel')->insertBatch($data);
    }
}
