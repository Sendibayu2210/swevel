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
                'id_sub_course' => '1',
                'kategori' => 'materi',
                'bab' => 'Pendahuluan',
                'sub_bab' => 'Pengertian Kotlin',
                'konten_materi' => 'konten materi kfjdslfjadlkfjlskafj dsfjdsklfjdslkfk dsjfsdlksdjfluadofjaklf hjkadvamcbjkafndjsgfuiefndsfsdf',
                'gambar' => '',
                'video' => '',
                'file' => '',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'id_sub_course' => '2',
                'kategori' => 'materi',
                'bab' => 'Pendahuluan',
                'sub_bab' => 'Pengertian Kotlin 2',
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
