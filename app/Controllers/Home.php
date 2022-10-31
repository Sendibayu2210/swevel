<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\MilestoneModel;
use App\Models\KontakModel;
use App\Models\TeamModel;
use App\Models\PortofolioModel;
use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->MilestoneModel = new MilestoneModel();
        $this->KontakModel = new KontakModel();
        $this->TeamModel = new TeamModel();
        $this->PortofolioModel = new PortofolioModel();
        $this->ArtikelModel = new ArtikelModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Swevel',
            'profile' => $this->ProfileModel->findAll(),
            'milestoneLimit' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(2),
            'milestone' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(),
            'kontak' => $this->KontakModel->findAll(),
            'team' => $this->TeamModel->findAll(),
            'portofolio' => $this->PortofolioModel->findAll(),
            'artikel' => $this->ArtikelModel->limit(3)->findAll(),
        ];
        return view('swevel/index_homepage', $data);
    }

    public function artikel()
    {
        $data = [
            'title' => 'Artikel',
            'kontak' => $this->KontakModel->findAll(),
            'artikel' => $this->ArtikelModel->findAll(),
        ];
        return view('swevel/artikel/artikel', $data);
    }

    public function detailArtikel($slug)
    {
        $artikel = $this->ArtikelModel->where('slug', $slug)->first();
        $data = [
            'title' => 'Detail Artikel',
            'kontak' => $this->KontakModel->findAll(),
            'artikel' => $artikel,
            'artikel_all' => $this->ArtikelModel->getArticleNotSlug($slug),
        ];
        return view('swevel/artikel/detail_artikel', $data);
    }
   
    public function faq()
    {
        $data = [
            'title' => 'FAQ',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/faq', $data);
    }
    public function kebijakanPrivasi()
    {
        $data = [
            'title' => 'Kebijakan Privasi',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/kebijakan_privasi', $data);
    }
}
