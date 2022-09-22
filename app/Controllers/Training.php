<?php

namespace App\Controllers;

class Training extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Training'
        ];
        return view('swevel/training/index', $data);
    }

    public function detailTraining()
    {
        $data = [
            'title' => 'Training'
        ];
        return view('swevel/training/detail_training', $data);
    }
}
