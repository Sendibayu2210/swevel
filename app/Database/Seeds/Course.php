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
                'kategori' => 'IT',
                'sub_kategori' => 'pemrograman',
                'nama_course' => 'Pemrograman Android',
                'slug_course' => 'pemrograman-android',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.',
                'harga' => 150000,
                'diskon' => 30000,
                'gambar' => 'androiddev.png',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'kategori' => 'IT',
                'sub_kategori' => 'pemrograman',
                'nama_course' => 'Front End Web',
                'slug_course' => 'front-end-web',
                'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptatibus eius! Optio illo dignissimos, quasi exercitationem necessitatibus sed, officiis eaque debitis nemo reprehenderit vitae cum sequi quia non dolor asperiores.',
                'harga' => 250000,
                'diskon' => 50000,
                'gambar' => 'frontend.jpg',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('course')->insertBatch($data);
    }
}
