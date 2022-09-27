<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Milestone extends Seeder
{
    public function run()
    {
        $data = [
            [
                'year' => '2020',
                'description'  => 'milestone 2020',
                'image'  => 'Gojek_Tokopedia-01.svg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'year' => '2021',
                'description'  => 'milestone 2021',
                'image'  => 'Gojek_Tokopedia-01.svg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'year' => '2022',
                'description'  => 'milestone 2022',
                'image'  => 'Gojek_Tokopedia-01.svg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('milestone')->insertBatch($data);
    }
}
