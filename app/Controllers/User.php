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
    public function materi($id)
    {
        $data = [
            'title' => 'Materi',
            'category' => 'materi',
            'course' => $id
        ];
        return view('swevel/user/materi', $data);
    }

    public function confirmKuis()
    {
        $data = [
            'title' => 'Mulai Kuis',
            'category' => 'kuis',
            'video' => $this->request->getVar('v'),
            'course' => $this->request->getVar('c'),
        ];
        return view('swevel/user/start_quiz', $data);
    }
    public function kuis()
    {
        $data = [
            'title' => 'Kuis',
            'category' => 'kuis',
            'video' => $this->request->getVar('v'),
            'course' => $this->request->getVar('c'),
            'soal' => $this->request->getVar('s'),
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
}
