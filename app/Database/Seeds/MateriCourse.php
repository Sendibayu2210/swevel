<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MateriCourse extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_course' => '1',
                'id_sub_course' => '1',
                'kategori' => 'materi',
                'bab' => 'Pendahuluan',
                'sub_bab' => 'Pengertian Android',
                'konten_materi' => 'konten materi kfjdslfjadlkfjlskafj dsfjdsklfjdslkfk dsjfsdlksdjfluadofjaklf hjkadvamcbjkafndjsgfuiefndsfsdf',
                'gambar' => '',
                'video' => '',
                'file' => '',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id_course' => '2',
                'id_sub_course' => '2',
                'kategori' => 'materi',
                'bab' => 'Pendahuluan',
                'sub_bab' => 'Pengertian web pendahuluan',
                'konten_materi' => 'konten materi kfjdslfjadlkfjlskafj dsfjdsklfjdslkfk dsjfsdlksdjfluadofjaklf hjkadvamcbjkafndjsgfuiefndsfsdf',
                'gambar' => '',
                'video' => '',
                'file' => '',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id_course' => '2',
                'id_sub_course' => '2',
                'kategori' => 'materi',
                'bab' => 'Pengenalan',
                'sub_bab' => 'Pengertian web pengenalan',
                'konten_materi' => 'konten materi kfjdslfjadlkfjlskafj dsfjdsklfjdslkfk dsjfsdlksdjfluadofjaklf hjkadvamcbjkafndjsgfuiefndsfsdf',
                'gambar' => '',
                'video' => '',
                'file' => '',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];
        $this->db->table('materi_course')->insertBatch($data);
    }
}
