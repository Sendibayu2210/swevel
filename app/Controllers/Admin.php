<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\MilestoneModel;
use App\Models\KontakModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->MilestoneModel = new MilestoneModel();
        $this->KontakModel = new KontakModel();
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


    // Milestone
    public function milestone()
    {
        $data = [
            'title' => 'Milestone',
            'milestone' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(),
        ];
        return view('swevel/admin/admin-milestone', $data);
    }
    public function addMilestone()
    {
        $data = [
            'title' => 'Add Milestone',
            'validation' => \Config\Services::validation(),
        ];
        return view('swevel/admin/admin-milestone-add', $data);
    }
    public function editMilestone($id)
    {
        $milestone = $this->MilestoneModel->find($id);
        $data = [
            'title' => 'Edit Milestone',
            'validation' => \Config\Services::validation(),
            'milestone' => $milestone,
        ];
        return view('swevel/admin/admin-milestone-edit', $data);
    }
    public function saveMilestone()
    {
        if (!$this->validate([
            'year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Tidak boleh kosong'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->MilestoneModel->insert([
            'image' => $fileName,
            'year' => $this->request->getVar('year'),
            'description' => $this->request->getVar('description')
        ]);
        $dataBerkas->move('img/milestone/', $fileName);
        session()->setFlashdata('message', 'Data Milestone Berhasil di Upload');
        return redirect('admin-milestone');
    }
    public function updateMilestone($id)
    {
        if (!$this->validate([
            'year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tahun Tidak boleh kosong'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');

        if ($dataBerkas->getError() == 4) {
            $fileName = $this->request->getVar('file_old');
        } else {
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('img/milestone/', $fileName);
            unlink('img/milestone/' . $this->request->getVar('file_old'));
        }
        $data = [
            'image' => $fileName,
            'year' => $this->request->getVar('year'),
            'description' => $this->request->getVar('description')
        ];
        $this->MilestoneModel->update($id, $data);
        session()->setFlashdata('message', 'Data Milestone Berhasil di Upload');
        return redirect('admin-milestone');
    }
    public function deleteMilestone($id)
    {
        $milestone = $this->MilestoneModel->find($id);
        unlink('img/milestone/' . $milestone['image']);
        $delete = $this->MilestoneModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'data milestone berhasil di hapus');
        } else {
            session()->setFlashdata('message', 'data milestone gagal di hapus');
        }
        return redirect('admin-milestone');
    }

    // Kontak
    public function kontak()
    {
        $data = [
            'title' => 'Kontak',
            'kontak_all' => $this->KontakModel->findAll(),
            'kontak_show' => $this->KontakModel->where('status', 'show')->findAll(),
            'validation' => \Config\Services::validation(),

        ];
        return view('swevel/admin/admin-kontak', $data);
    }
    public function addKontak()
    {
        if (!$this->validate([
            'kontak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih salah satu kontak'
                ]
            ],
            'number_link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isikan nomor atau link'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $id = $this->request->getVar('kontak');
        $status = $this->request->getVar('category_save');
        if ($status == 'only_save') {
            $status1 = 'hide';
        } else if ($status == 'publish_display') {
            $status1 = 'show';
        }

        $data = [
            'description' => $this->request->getVar('number_link'),
            'status' => $status1,
        ];
        $update = $this->KontakModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data kontak berhasil di publish');
        } else {
            session()->setFlashdata('message', 'Data kontak gagal di publish');
        }
        return redirect('admin-kontak');
    }
}
