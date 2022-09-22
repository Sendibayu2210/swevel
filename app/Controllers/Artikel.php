<?php

namespace App\Controllers;

class Artikel extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Artikel'
        ];
        return view('swevel/artikel/artikel', $data);
    }

    public function detailArtikel()
    {
        $data = [
            'title' => 'Detail Artikel'
        ];
        return view('swevel/artikel/detail_artikel', $data);
    }
}
