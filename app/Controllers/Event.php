<?php

namespace App\Controllers;

class Event extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Event'
        ];
        return view('swevel/event/event', $data);
    }

    public function detailevent()
    {
        $data = [
            'title' => 'Detail Event'
        ];
        return view('swevel/event/detail_event', $data);
    }
}
