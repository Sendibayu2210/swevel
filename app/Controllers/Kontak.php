<?php

namespace App\Controllers;

use App\Models\KontakModel;
use App\Models\ProviderModel;

class Kontak extends BaseController
{
    protected $KontakModel;
    public  function __construct()
    {
        $this->KontakModel = new KontakModel();
        $this->ProviderModel = new ProviderModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Kontak',
            // 'kontak' => $this->KontakModel->orderBy('nama', 'asc')->findAll(),
            'kontak' => $this->KontakModel->getKontak(),
            'provider' => $this->ProviderModel->orderBy('nama_provider', 'asc')->findAll(),
            'validation' => \Config\Services::validation(),
        ];
        return view('kontak/index', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'nama' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'nomor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'group_kontak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Group kontak harus diisi',
                ]
            ],
            'provider' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],

        ])) {
            session()->setFlashdata('pesan', $this->validator->listErrors());
            session()->setFlashdata('error_add_kontak', 'error');
            return redirect()->back()->withInput();
        } else {
            $this->KontakModel->insert([
                'nama' => $this->request->getVar('nama'),
                'nomor' => $this->request->getVar('nomor'),
                'group_kontak' => $this->request->getVar('group_kontak'),
                'provider' => $this->request->getVar('provider'),
            ]);
            session()->setFlashdata('pesan', 'Data kontak berhasil ditambahkan');
            return redirect('kontak');
        }
    }

    public function update()
    {
        if (!$this->validate([
            'nama' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'nomor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'group_kontak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'provider' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],

        ])) {
            session()->setFlashdata('pesan', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $id = $this->request->getVar('edit_id');
            $this->KontakModel->update($id, [
                'nama' => $this->request->getVar('nama'),
                'nomor' => $this->request->getVar('nomor'),
                'group_kontak' => $this->request->getVar('group_kontak'),
                'provider' => $this->request->getVar('provider'),
            ]);
            session()->setFlashdata('pesan', 'Data kontak berhasil diubah');
            return redirect('kontak');
        }
    }

    public function delete($id)
    {
        $this->KontakModel->delete($id);
        session()->setFlashdata('pesan', 'Data kontak berhasil dihapus');
        return redirect('kontak');
    }
}
