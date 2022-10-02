<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SubCourse extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_course' => '1',
                'title' => 'Fundamental Android Developer',
                'slug_sub_course' => 'Fundamental-Android-Developer',
                'deskripsi' => 'Fundamental sebagai android developer sangat penting .... balbalbalblallbla',
                'step' => 1,
                'level' => 'basic',
                'hours' => '90 jam',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id_course' => '2',
                'title' => 'Fundamental Front End Web',
                'slug_sub_course' => 'Fundamental-Front-End-Web',
                'deskripsi' => 'Fundamental sebagai Front End Web sangat penting .... balbalbalblallbla',
                'step' => 1,
                'level' => 'basic',
                'hours' => '90 jam',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id_course' => '2',
                'title' => 'Memulai Front End Web dengan HTML, CSS dan Javascript',
                'slug_sub_course' => 'Memulai-Front-End-Web-dengan-HTML,-CSS-dan-Javascript',
                'deskripsi' => 'Fundamental sebagai Front End Web sangat penting .... balbalbalblallbla',
                'step' => 2,
                'level' => 'basic',
                'hours' => '90 jam',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('sub_course')->insertBatch($data);
    }
}
