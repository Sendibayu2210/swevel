<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $useTimestamps = true;

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'email'];

    protected $validationRules = [
        'nama' => 'required',
        'email' => 'required|valid_email',
    ];
    protected $validationMessages = [
        'nama' => [
            'required' => 'nama tidak boleh kosong',
        ],
        'email' => [
            'required' => 'email tidak boleh kosong',
            'valid_email' => 'data bukan email',
        ]
    ];
}
