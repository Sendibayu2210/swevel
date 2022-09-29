<?php

namespace App\Controllers;

use App\Models\KontakModel;

class Artikel extends BaseController
{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Artikel',
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/artikel/artikel', $data);
    }

    public function detailArtikel()
    {
        $data = [
            'title' => 'Detail Artikel',
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/artikel/detail_artikel', $data);
    }
}
