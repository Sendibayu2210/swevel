<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('swevel/admin/dashboard', $data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'About Us'
        ];
        return view('swevel/admin/admin-about-us', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'FAQ',
        ];
        return view('swevel/admin/admin_faq', $data);
    }

    public function article()
    {
        $data = [
            'title' => 'Artikel',
            'category' => 'add'
        ];
        return view('swevel/admin/admin-article', $data);
    }

    public function addArticle()
    {
        $data = $this->request->getVar();
    }
    public function editArticle()
    {
        $data = [
            'title' => 'Edit Artikel',
            'category' => 'edit'
        ];
        return view('swevel/admin/admin-article', $data);
    }
    public function event()
    {
        $data = [
            'title' => 'Event',
        ];
        return view('swevel/admin/admin-event', $data);
    }
    public function moreEvent()
    {
        $data = [
            'title' => 'More Event',
        ];
        return view('swevel/admin/admin-more-event', $data);
    }
    public function portofolio()
    {
        $data = [
            'title' => 'Portofolio',
        ];
        return view('swevel/admin/admin-portofolio', $data);
    }
    public function payment()
    {
        $data = [
            'title' => 'Payment',
        ];
        return view('swevel/payment/payment', $data);
    }

    // profile
    public function profile()
    {
        $data = [
            'title' => 'profile',
            'profile' => $this->ProfileModel->findAll(),
        ];
        return view('swevel/admin/admin-profile', $data);
    }
    public function editProfile($id)
    {
        $profile = $this->ProfileModel->find($id);
        $data = [
            'title' => "edit profile " . $profile['title'],
            'profile' => $profile,
        ];
        return view('swevel/admin/admin-profile-edit', $data);
    }
    public function updateProfile($id)
    {
        if (!$this->validate([
            'title' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi',
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi',
                ]
            ],

        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            // session()->setFlashdata('error_add_kontak', 'error');
            return redirect()->back()->withInput();
        } else {
            $data = [
                'title' => $this->request->getVar('title'),
                'description' => $this->request->getVar('description'),
            ];
            $this->ProfileModel->update($id, $data);
            session()->setFlashdata('message', 'data ' . $this->request->getVar('title') . ' berhasil di update');
            return redirect('profile');
        }
    }

    public function deleteProfile()
    {
        dd($this->request->getVar());
    }
}
