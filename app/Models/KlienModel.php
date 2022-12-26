<?php

namespace App\Models;

use CodeIgniter\Model;

class KlienModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'klien';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;    
    protected $returnType       = 'array';    
    protected $allowedFields    = ['gambar'];

    // Dates
    protected $useTimestamps = false;  
}
