<?php

namespace App\Controllers;

use App\Models\KontakModel;

class Event extends BaseController
{
    public function __construct()
    {
        $this->KontakModel = new KontakModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Event',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/event/event', $data);
    }

    public function detailevent()
    {
        $data = [
            'title' => 'Detail Event',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/event/detail_event', $data);
    }
}
