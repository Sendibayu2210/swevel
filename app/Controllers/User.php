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
            'title' => 'Materi',
            'materi' => 'yes'
        ];
        return view('swevel/user/materi', $data);
    }
    public function kuis()
    {
        $data = [
            'title' => 'Kuis'
        ];
        return view('swevel/user/quiz', $data);
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
    public function submission()
    {
        $data = [
            'title' => 'submission'
        ];
        return view('swevel/user/submission', $data);
    }
    public function payment($id)
    {
        $data = [
            'title' => 'Payment',
            'id' => $id
        ];
        return view('swevel/payment/payment', $data);
    }
}
