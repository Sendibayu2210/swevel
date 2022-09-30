<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Course extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_course' => 'Pemrograman Kotlin',
                'slug_course' => 'Pemrograman-Kotlin',
                'kategori' => 'IT',
                'sub_kategori' => 'pemrograman',
                'deskripsi' => 'kotlin adalah blablabla',
                'harga' => 150000,
                'diskon' => 30000,
                'gambar' => 'kotlin.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama_course' => 'Membuat Aplikasi Android dengan Flutter',
                'slug_course' => 'Membuat-Aplikasi-Android-dengan-Flutter',
                'kategori' => 'IT',
                'sub_kategori' => 'pemrograman',
                'deskripsi' => 'fluter adalah blablabla',
                'harga' => 250000,
                'diskon' => 50000,
                'gambar' => 'flutter.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('course')->insertBatch($data);
    }
}
