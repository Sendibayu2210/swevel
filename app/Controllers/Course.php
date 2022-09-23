<?php

namespace App\Controllers;

class Course extends BaseController
{
    public function index($category = null)
    {
        if ($category == null) {
            $category = 'Software Development';
        }

        $data = [
            'title' => 'Course',
            'category' => $category,
        ];
        return view('swevel/course/course', $data);
    }

    public function detailCourse()
    {
        $data = [
            'title' => 'Detail Course'
        ];
        return view('swevel/course/detail_course', $data);
    }
    public function detailKurikulum()
    {
        $data = [
            'title' => 'Detail Kurikulum'
        ];
        return view('swevel/course/detail_kurikulum', $data);
    }
}
