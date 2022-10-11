<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\MilestoneModel;
use App\Models\KontakModel;
use App\Models\TeamModel;
use App\Models\PortofolioModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->MilestoneModel = new MilestoneModel();
        $this->KontakModel = new KontakModel();
        $this->TeamModel = new TeamModel();
        $this->PortofolioModel = new PortofolioModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Swevel',
            'profile' => $this->ProfileModel->findAll(),
            'milestoneLimit' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(2),
            'milestone' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(),
            'kontak_all' => $this->KontakModel->findAll(),
            'team' => $this->TeamModel->findAll(),
            'portofolio' => $this->PortofolioModel->findAll(),
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
            'title' => 'FAQ',
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/faq', $data);
    }
    public function kebijakanPrivasi()
    {
        $data = [
            'title' => 'Kebijakan Privasi',
            'kontak_all' => $this->KontakModel->findAll(),
        ];
        return view('swevel/kebijakan_privasi', $data);
    }
}
