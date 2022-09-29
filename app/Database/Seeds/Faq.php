<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Faq extends Seeder
{
    public function run()
    {
        $data = [
            [
                'from' => 'Whatsapp',
                'question'  => 'wa.me/62847298248427',
                'answer'  => '<i class="fa-brands fa-whatsapp"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'from' => 'Phone',
                'question'  => 'wa.me/62847298248427',
                'answer'  => '<i class="fa-solid fa-phone"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'from' => 'Instagram',
                'question'  => 'https://instagram.com/',
                'answer'  => '<i class="fa-brands fa-instagram"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'from' => 'LinkedIn',
                'question'  => 'https://id.linkedin.com/',
                'answer'  => '<i class="fa-brands fa-linkedin"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'from' => 'Twitter',
                'question'  => 'https://id.linkedin.com/',
                'answer'  => '<i class="fa-brands fa-twitter"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'from' => 'Telegram',
                'question'  => 'https://id.linkedin.com/',
                'answer'  => '<i class="fa-brands fa-telegram"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'from' => 'Facebook',
                'question'  => 'https://id.linkedin.com/',
                'answer'  => '<i class="fa-brands fa-facebook"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'from' => 'Tiktok',
                'question'  => 'https://id.linkedin.com/',
                'answer'  => '<i class="fa-brands fa-tiktok"></i>',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],

        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('faq')->insertBatch($data);
    }
}
