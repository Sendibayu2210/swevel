<?php

namespace App\Controllers;

use App\Models\KontakModel;

class Training extends BaseController
{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
    }
    public function index($category = null)
    {
        if ($category == null) {
            $category = 'Software Development';
        }

        $data = [
            'title' => 'Training',
            'category' => $category,
            'kontak_all' => $this->KontakModel->findAll(),

        ];
        return view('swevel/training/index', $data);
    }

    public function detailTraining()
    {
        $data = [
            'title' => 'Training',
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/training/detail_training', $data);
    }
}
