<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'kontak';
    protected $useTimestamps = true;

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'description', 'icon'];

    // public function getKontak()
    // {
    //     $query = $this->db->table('kontak')
    //         ->join('provider', 'kontak.provider=provider.id_provider')
    //         ->orderBy('nama', 'asc')
    //         ->get()->getResultArray();
    //     return $query;
    // }
}
