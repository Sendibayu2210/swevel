<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Profile extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category' => 'definition',
                'title'  => 'Definition of Swevel',
                'Description'  => 'Lorem definition',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'category' => 'visi_misi',
                'title'  => 'Visi & Mission',
                'Description'  => 'Lorem visi misi',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'category' => 'location',
                'title'  => 'Location',
                'Description'  => 'Lorem location',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('profile')->insertBatch($data);
    }
}
