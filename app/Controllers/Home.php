<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\MilestoneModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->MilestoneModel = new MilestoneModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Swevel',
            'profile' => $this->ProfileModel->findAll(),
            'milestoneLimit' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(2),
            'milestone' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(),
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
