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

    public function cobaJson()
    {
        $var_array = array(
            'nama pengguna' => 'value01',
            'jawaban' => [
                'subkey01' => [
                    'soal' => 'apa itu kodok',
                    'jawaban' => 'kodok merupakan',
                    'is_valid' => '2'
                ],
                'subkey02' => [
                    'soal' => 'apa itu kodok',
                    'jawaban' => 'kodok merupakan',
                    'is_valid' => '2'
                ],
            ],
            'key04' => 'value04',
        );


        $js_encode = json_encode($var_array);
        dd($js_encode);
    }
}
