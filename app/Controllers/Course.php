<?php

namespace App\Controllers;

use App\Models\KontakModel;
use App\Models\CourseModel;
use App\Models\SubCourseModel;
use App\Models\MateriModel;
use App\Models\PurchaseModel;

class Course extends BaseController

{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
        $this->CourseModel = new CourseModel();
        $this->SubCourseModel = new SubCourseModel();
        $this->MateriModel = new MateriModel();
        $this->PurchaseModel = new PurchaseModel();
    }

    public function index($category = null)
    {
        if ($category == null) {
            $category = 'Software Development';
        }

        $data = [
            'title' => 'Course',
            'category' => $category,
            'kontak' => $this->KontakModel->findAll(),            
        ];
        return view('swevel/course/course', $data);
    }

    public function detailCourse($id)
    {

        if(session()->get('swevel_email')){
            $cek_purchase = $this->PurchaseModel->where('id_course', $id)->first();        
            if($cek_purchase){
                if($cek_purchase['status'] == 'approved'){
                    $link = '<a href="/course/materi/'. $id .'" class="btn btn-sm btn-purple-100">Start Class</a>';
                }else{
                    $link = '<div class="btn btn-sm btn-purple-100">Menunggu approval</div>';
                }
            }else{
                $link = '<a href="/payment/'. $id .'" class="btn btn-sm btn-purple-100">Join Now</a>';
            }
        }else{
            $link = '<a href="/payment/'. $id .'" class="btn btn-sm btn-purple-100">Join Now</a>';
        }
        $data = [
            'title' => 'Detail Course',
            'kontak' => $this->KontakModel->findAll(),
            'id' => $id,                        
            'link' => $link,
        ];
        return view('swevel/course/detail_course', $data);
    }

    public function detailKurikulum()
    {
        $data = [
            'title' => 'Detail Kurikulum',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/course/detail_kurikulum', $data);
    }


    public function getApiCourse()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://lms.lazy2.codes/api/course");
        // curl_setopt($ch, CURLOPT_URL, "http://www.omdbapi.com/?apikey=9fd3ac6f&s=course");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }

    public function getApiDetailCourse()
    {
        $id = $this->request->getVar('id');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://lms.lazy2.codes/api/course/detail/" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }
    public function searchApiCourse()
    {
        $title = $this->request->getVar('search');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://lms.lazy2.codes/api/course/find/" . $title);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }
    public function getApiKuis()
    {
        $title = $this->request->getVar('search');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://lms.lazy2.codes/public/api/quiz");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }
    public function getVideo()
    {
        $id = $this->request->getVar('id');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://lms.lazy2.codes/public/api/course/video/" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }


    public function not_yet_approved(){
        $data = [
            'title' => 'Not yet Approved',            
        ];
        return view('swevel/course/not-yet-approved',$data);
    }
}
