<?php

namespace App\Controllers;

class Training extends BaseController
{
    public function index($category = null)
    {
        if ($category == null) {
            $category = 'Software Development';
        }

        $data = [
            'title' => 'Training',
            'category' => $category,

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
