<?php

namespace App\Controllers;

use App\Models\KontakModel;

class Course extends BaseController

{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
    }

    public function index($category = null)
    {
        if ($category == null) {
            $category = 'Software Development';
        }

        $data = [
            'title' => 'Course',
            'category' => $category,
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/course/course', $data);
    }

    public function detailCourse()
    {
        $data = [
            'title' => 'Detail Course',
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/course/detail_course', $data);
    }
    public function detailKurikulum()
    {
        $data = [
            'title' => 'Detail Kurikulum',
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/course/detail_kurikulum', $data);
    }
}
