<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'level' => 'admin',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'level' => 'pengguna',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
