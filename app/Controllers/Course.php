<?php

namespace App\Controllers;

use App\Models\KontakModel;
use App\Models\CourseModel;

class Course extends BaseController

{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
        $this->CourseModel = new CourseModel();
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
            'course' => $this->CourseModel->findAll(),
        ];
        return view('swevel/course/course', $data);
    }

    public function detailCourse($slug)
    {
        $course = $this->CourseModel->where('slug_course', $slug)->first();
        if (!$course) {
            pageNotFound();
        }
        $data = [
            'title' => $course['nama_course'],
            'kontak_all' => $this->KontakModel->findAll(),
            'course' => $course,
            'related_course' => $this->CourseModel->findAll(),
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
