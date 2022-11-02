<?php

namespace App\Controllers;
use App\Models\PurchaseModel;
use App\Models\UsersModel;

class User extends BaseController
{

    public function __construct(){
        $this->PurchaseModel = new PurchaseModel();
        $this->UsersModel = new UsersModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('swevel/admin/dashboard', $data);
    }
    public function materi($id)
    {        
        $email = session()->get('swevel_email');
        $id_user = $this->UsersModel->where('email',$email)->first();
        $cek_purchase = $this->PurchaseModel->where('id_user',$id_user['id'])->where('id_course',$id)->first();            
        if(!$cek_purchase){            
            session()->setFlashdata('message','Maaf! Anda belum membeli course ini');
            return redirect('notyetapproved');
        }else{
            if($cek_purchase['status'] != 'approved'){
                session()->setFlashdata('message','Maaf! course yang anda beli sedang dalam proses approval');
                return redirect('notyetapproved');
            }
        }        

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
