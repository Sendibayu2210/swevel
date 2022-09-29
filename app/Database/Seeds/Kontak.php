<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Kontak extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Whatsapp',
                'description'  => 'wa.me/62847298248427',
                'icon'  => '<i class="fa-brands fa-whatsapp"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name' => 'Phone',
                'description'  => 'wa.me/62847298248427',
                'icon'  => '<i class="fa-solid fa-phone"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name' => 'Instagram',
                'description'  => 'https://instagram.com/',
                'icon'  => '<i class="fa-brands fa-instagram"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name' => 'LinkedIn',
                'description'  => 'https://id.linkedin.com/',
                'icon'  => '<i class="fa-brands fa-linkedin"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name' => 'Twitter',
                'description'  => 'https://id.linkedin.com/',
                'icon'  => '<i class="fa-brands fa-twitter"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name' => 'Telegram',
                'description'  => 'https://id.linkedin.com/',
                'icon'  => '<i class="fa-brands fa-telegram"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name' => 'Facebook',
                'description'  => 'https://id.linkedin.com/',
                'icon'  => '<i class="fa-brands fa-facebook"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'name' => 'Tiktok',
                'description'  => 'https://id.linkedin.com/',
                'icon'  => '<i class="fa-brands fa-tiktok"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('kontak')->insertBatch($data);
    }
}
