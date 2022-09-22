<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('swevel/admin/dashboard', $data);
    }
    public function materi()
    {
        $data = [
            'title' => 'Materi'
        ];
        return view('swevel/user/materi', $data);
    }
    public function kuis()
    {
        $data = [
            'title' => 'Kuis'
        ];
        return view('swevel/user/kuis', $data);
    }
    public function savedCourse()
    {
        $data = [
            'title' => 'Saved Course'
        ];
        return view('swevel/user/saved_course', $data);
    }
    public function status()
    {
        $data = [
            'title' => 'status'
        ];
        return view('swevel/status/status', $data);
    }
}
