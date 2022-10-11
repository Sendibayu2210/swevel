<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\MilestoneModel;
use App\Models\KontakModel;
use App\Models\FaqModel;
use App\Models\CourseModel;
use App\Models\SubCourseModel;
use App\Models\TeamModel;
use App\Models\PortofolioModel;
use App\Models\ArtikelModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->MilestoneModel = new MilestoneModel();
        $this->KontakModel = new KontakModel();
        $this->FaqModel = new FaqModel();
        $this->CourseModel = new CourseModel();
        $this->SubCourseModel = new SubCourseModel();
        $this->TeamModel = new TeamModel();
        $this->ArtikelModel = new ArtikelModel();
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

    public function article()
    {
        $data = [
            'title' => 'Artikel',
        ];
        return view('swevel/admin/admin-article', $data);
    }
    public function addArticle()
    {
        $data = [
            'title' => 'Artikel',
            'category' => 'add',
            'validation' => \Config\Services::validation(),
        ];
        return view('swevel/admin/admin-add-article', $data);
    }
    public function saveArticle()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul Tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Tidak boleh kosong'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Tidak boleh kosong'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png,image/svg/]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png,svg',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        // $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->ArtikelModel->insert([
            'judul' => htmlspecialchars($this->request->getVar('judul')),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
            'tanggal' => $this->request->getVar('tanggal'),
            // 'gambar' => $this->request->getVar('berkas'),
        ]);
        $dataBerkas->move('img/artikel/', $fileName);
        session()->setFlashdata('message', 'Data Artikel Berhasil di Upload');
        return redirect('admin-artikel');
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
            'portofolio' => $this->PortofolioModel->findAll(),
            'validation' => \Config\Services::validation(),
        ];
        return view('swevel/admin/admin-portofolio', $data);
    }
    public function addPortofolio()
    {
        if (!$this->validate([
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');

            return redirect()->back()->withInput();
        }

        // $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->PortofolioModel->insert([
            'image' => $fileName,
        ]);
        $dataBerkas->move('img/portofolio/', $fileName);
        session()->setFlashdata('message', 'Data portofolio Berhasil di Upload');
        session()->setFlashdata('message1', 'Success');
        return redirect('admin-portofolio');
    }

    public function deletePortofolio()
    {
        $id = $this->request->getVar('id_portofolio');
        unlink('img/portofolio/' . $this->request->getVar('old_file'));
        $delete = $this->PortofolioModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'data portofolio berhasil di hapus');
            session()->setFlashdata('message1', 'Success');
        } else {
            session()->setFlashdata('message', 'data portofolio gagal di hapus');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-portofolio');
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
            'validation' => \Config\Services::validation(),

        ];
        return view('swevel/admin/admin-kontak', $data);
    }
    public function addKontak()
    {
        if (!$this->validate([
            'kontak' => [
                'rules' => 'required|is_unique[kontak.name]',
                'errors' => [
                    'required' => 'Pilih salah satu kontak',
                    'is_unique' => 'Data sudah ada, silahkan pilih kontak lain',

                ]
            ],
            'number_link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isikan nomor atau link'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $kontak = $this->request->getVar('kontak');

        if ($kontak == 'phone') {
            $icon = '<i class="fa-solid fa-' . $kontak . '"></i>';
        } else {
            $icon = '<i class="fa-brands fa-' . $kontak . '"></i>';
        }

        $data = [
            'name' => $kontak,
            'description' => htmlspecialchars($this->request->getVar('number_link')),
            'icon' => $icon,
        ];
        $insert = $this->KontakModel->insert($data);
        if ($insert) {
            session()->setFlashdata('message', 'Data kontak berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data kontak gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-kontak');
    }
    public function updateKontak()
    {
        if (!$this->validate([
            'edit_number_link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isikan nomor atau link'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }

        $id = $this->request->getVar('edit_id_kontak');
        $data = ['description' => htmlspecialchars($this->request->getVar('edit_number_link'))];
        $update = $this->KontakModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data kontak berhasil di perbaharui');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data kontak gagal di perbaharui');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-kontak');
    }

    public function deleteKontak()
    {
        $id = $this->request->getVar('idKontak');
        $delete = $this->KontakModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'Data kontak berhasil di hapus');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data kontak gagal di hapus');
            session()->setFlashdata('message1', 'error');
        }
        return redirect('admin-kontak');
    }

    // Add FAQ
    public function faq()
    {
        $data = [
            'title' => 'FAQ',
            'faq' => $this->FaqModel->findAll(),
            'validation' => \Config\Services::validation(),
        ];
        return view('swevel/admin/admin_faq', $data);
    }
    public function addFaq()
    {
        if (!$this->validate([
            'add-question' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pertanyaan harus diisi'
                ]
            ],
            'add-answer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jawaban harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorAdd');
            return redirect()->back()->withInput();
        }

        $data = [
            'from' => 'Swevel',
            'question' => $this->request->getVar('add-question'),
            'answer' => $this->request->getVar('add-answer'),
        ];
        $insert = $this->FaqModel->insert($data);
        if ($insert) {
            session()->setFlashdata('message', 'Data faq berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data faq gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-faq');
    }
    public function updateAnswerFaq()
    {
        if (!$this->validate([
            'update-answer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jawaban harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorUpdate');
            return redirect()->back()->withInput();
        }

        $id = $this->request->getVar('detail-id');
        $data = ['answer' => $this->request->getVar('update-answer'),];
        $update = $this->FaqModel->update($id, $data);
        if ($update) {
            session()->setFlashdata('message', 'Data faq berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data faq gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        return redirect('admin-faq');
    }
    public function deleteFaq()
    {
        $id = $this->request->getVar('idFaq');
        $delete = $this->FaqModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'Data faq berhasil di hapus');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data faq gagal di hapus');
            session()->setFlashdata('message1', 'error');
        }
        return redirect('admin-faq');
    }

    // Admin Course
    public function course()
    {
        $data = [
            'title' => 'Admin Course',
            'course' => $this->CourseModel->findAll(),
        ];
        return view('swevel/admin/admin-course', $data);
    }
    public function detailCourse($slug)
    {
        $course = $this->CourseModel->where('slug_course', $slug)->first();
        $step_course = $this->SubCourseModel->where('id_course', $course['id'])->findAll();
        $data = [
            'title' => 'View Course ' . $course['nama_course'],
            'course' => $course,
            'step_course' => $step_course,
            'slug_course' => $slug,
        ];
        return view('swevel/admin/admin-detail-course', $data);
    }

    public function addStepCourse($slug)
    {
        $course = $this->CourseModel->where('slug_course', $slug)->first();
        $count_step = $this->SubCourseModel->where('id_course', $course['id'])->countAllResults();
        $step_course = $this->SubCourseModel->where('id_course', $course['id'])->findAll();

        $data = [
            'title' => 'Tambah Step Course ' . $course['nama_course'],
            'course' => $course,
            'step_course' => $step_course,
            'count_step' => $count_step + 1,
            'validation' => Validation(),
        ];
        return view('swevel/admin/admin-add-step-course', $data);
    }

    public function saveSubCourse()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul step harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'deskripsi harus diisi'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'level tidak boleh kosong'
                ]
            ],
            'jam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jam tidak boleh kosong'
                ]
            ],

        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            return redirect()->back()->withInput();
        }
        $judul = $this->request->getVar('judul');
        $slug_sub_course = strtolower(str_replace(' ', '-', $judul));
        $data = [
            'id_course' => $this->request->getVar('id'),
            'title' => $judul,
            'slug_sub_course' => $slug_sub_course,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'level' => htmlspecialchars($this->request->getVar('level')),
            'hours' => htmlspecialchars($this->request->getVar('jam')),
            'step' => htmlspecialchars($this->request->getVar('step')),
        ];
        $insert = $this->SubCourseModel->insert($data);
        if ($insert) {
            session()->setFlashdata('message', 'Data step course berhasil di publish');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data step course gagal di publish');
            session()->setFlashdata('message1', 'Error');
        }
        // return redirect('admin-course/' . $this->request->getVar('slug'));
        return redirect('admin-course');
    }

    public function team()
    {
        $data = [
            'title' => 'Team',
            'team' => $this->TeamModel->findAll(),
            'validation' => \Config\Services::validation(),
        ];
        return view('swevel/admin/admin-team', $data);
    }

    public function saveTeam()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak boleh kosong'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorAdd');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $this->TeamModel->insert([
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'jabatan' => htmlspecialchars($this->request->getVar('jabatan')),
            'image' => $fileName,
            'linkedin' => htmlspecialchars($this->request->getVar('linkedin')),
            'instagram' => htmlspecialchars($this->request->getVar('instagram')),
            'facebook' => htmlspecialchars($this->request->getVar('facebook')),
        ]);
        $dataBerkas->move('img/team/', $fileName);
        session()->setFlashdata('message1', 'success');
        session()->setFlashdata('message', 'Data team Berhasil di Upload');
        return redirect('admin-team');
    }

    public function updateTeam()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Tidak boleh kosong'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ],
        ])) {
            session()->setFlashdata('message', $this->validator->listErrors());
            session()->setFlashdata('message1', 'Error');
            session()->setFlashdata('message2', 'ErrorUpdate');
            return redirect()->back()->withInput();
        }

        $dataBerkas = $this->request->getFile('berkas');
        if ($dataBerkas->getError() == 4) {
            $fileName = $this->request->getVar('file_lama');
        } else {
            $fileName = $dataBerkas->getRandomName();
            $dataBerkas->move('img/team/', $fileName);
            $fileDelete = 'img/team/' . $this->request->getVar('file_lama');
            unlink($fileDelete);
        }
        $id = $this->request->getVar('edit_id');
        $data = [
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'jabatan' => htmlspecialchars($this->request->getVar('jabatan')),
            'image' => $fileName,
            'linkedin' => htmlspecialchars($this->request->getVar('linkedin')),
            'instagram' => htmlspecialchars($this->request->getVar('instagram')),
            'facebook' => htmlspecialchars($this->request->getVar('facebook')),
        ];
        $this->TeamModel->update($id, $data);
        // $dataBerkas->move('img/team/', $fileName);
        session()->setFlashdata('message1', 'success');
        session()->setFlashdata('message', 'Data team Berhasil di update');
        return redirect('admin-team');
    }
    public function deleteTeam()
    {
        $id = $this->request->getVar('idTeam');
        unlink('img/team/' . $this->request->getVar('file_old'));
        $delete = $this->TeamModel->delete($id);
        if ($delete) {
            session()->setFlashdata('message', 'Data team berhasil di hapus');
            session()->setFlashdata('message1', 'success');
        } else {
            session()->setFlashdata('message', 'Data team gagal di hapus');
            session()->setFlashdata('message1', 'error');
        }
        return redirect('admin-team');
    }
}
