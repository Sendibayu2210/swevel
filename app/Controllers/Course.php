<?php

namespace App\Controllers;

use App\Models\KontakModel;
use App\Models\CourseModel;
use App\Models\SubCourseModel;
use App\Models\MateriModel;

class Course extends BaseController

{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
        $this->CourseModel = new CourseModel();
        $this->SubCourseModel = new SubCourseModel();
        $this->MateriModel = new MateriModel();
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
            'step_course' => $this->SubCourseModel->where('id_course', $course['id'])->orderBy('step', 'asc')->findAll(),
            'slug_course' => $slug,
        ];
        return view('swevel/course/detail_course', $data);
    }

    public function materi($slug_course, $id_materi = null)
    {
        $get_id = $this->CourseModel->where('slug_course', $slug_course)->first();
        $get_sub = $this->SubCourseModel->where('id_course', $get_id['id'])->orderBy('step', 'asc')->findAll();
        $get_title_materi = $this->MateriModel->where('id_course', $get_id['id'])->findAll();

        if ($id_materi) {
            $get_materi = $this->MateriModel->where('id_course', $get_id['id'])->where('id_materi', $id_materi)->first();
            if (!$get_materi) {
                pageNotFound();
            }
        } else {
            $get_materi = '';
        }

        $data = [
            'title' => 'Materi',
            'step_course' => $get_sub,
            'title_materi' => $get_title_materi,
            'slug_course' => $slug_course,
            'materi' => $get_materi,
        ];
        return view('swevel/user/materi', $data);
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
