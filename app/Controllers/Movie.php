<?php

namespace App\Controllers;

class Movie extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Movie'
        ];
        return view('movie/index', $data);
    }
}
