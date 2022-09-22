<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Swevel'
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
    public function kebijakanPrvasi()
    {
        $data = [
            'title' => 'Kebijakan Privasi'
        ];
        return view('swevel/kebijakan_privasi', $data);
    }
}
