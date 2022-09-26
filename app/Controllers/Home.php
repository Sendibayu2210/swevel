<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Swevel',
            'profile' => $this->ProfileModel->findAll(),
        ];
        return view('swevel/index_homepage', $data);
    }

    public function auth()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('swevel/auth', $data);
    }
    public function faq()
    {
        $data = [
            'title' => 'FAQ'
        ];
        return view('swevel/faq', $data);
    }
    public function kebijakanPrivasi()
    {
        $data = [
            'title' => 'Kebijakan Privasi'
        ];
        return view('swevel/kebijakan_privasi', $data);
    }
}
