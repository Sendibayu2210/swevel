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

    public function detailCourse($id)
    {
        $data = [
            'title' => 'Detail Course',
            'kontak_all' => $this->KontakModel->findAll(),
            'id' => $id,
            'related_course' => $this->CourseModel->findAll(),
            // 'step_course' => $this->SubCourseModel->where('id_course', $detail_course['id'])->orderBy('step', 'asc')->findAll(),
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
            'title' => 'Materi ' . $get_id['nama_course'],
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


    public function getApiCourse()
    {
        $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, "https://lms.lazy2.codes/api/course");
        curl_setopt($ch, CURLOPT_URL, "http://www.omdbapi.com/?apikey=9fd3ac6f&s=course");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }

    public function getApiDetailCourse($id)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://lms.lazy2.codes/api/course/detail/" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }
}
