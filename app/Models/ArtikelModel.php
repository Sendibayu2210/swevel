<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'artikel';
    protected $primaryKey       = '';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['judul', 'deskripsi', 'gambar', 'kategori', 'pembuat', 'tanggal'];

    // Dates
    protected $useTimestamps = false;
}
