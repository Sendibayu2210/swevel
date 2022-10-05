<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Team extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'orang1',
                'jabatan' => 'jabatan1',
                'image' => 'default.jpg',
                'linkedin' => 'https://linkedin.com',
                'instagram' => 'https://instagram.com',
                'facebook' => 'https://facebook.com',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'orang2',
                'jabatan' => 'jabatan2',
                'image' => 'default.jpg',
                'linkedin' => 'https://linkedin.com',
                'instagram' => 'https://instagram.com',
                'facebook' => 'https://facebook.com',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'orang3',
                'jabatan' => 'jabatan3',
                'image' => 'default.jpg',
                'linkedin' => 'https://linkedin.com',
                'instagram' => 'https://instagram.com',
                'facebook' => 'https://facebook.com',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'orang4',
                'jabatan' => 'jabatan4',
                'image' => 'default.jpg',
                'linkedin' => 'https://linkedin.com',
                'instagram' => 'https://instagram.com',
                'facebook' => 'https://facebook.com',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];

        $this->db->table('team')->insertBatch($data);
    }
}
