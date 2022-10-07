<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Portofolio extends Seeder
{
    public function run()
    {
        $data = [
            [
                'image' => 'Frame 57.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'image' => 'Frame 58.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'image' => 'Frame 69.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'image' => 'image 9.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'image' => 'Gambar.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'image' => 'poster.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'image' => 'poster2.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('portofolio')->insertBatch($data);
    }
}
