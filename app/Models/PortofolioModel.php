<?php

namespace App\Models;

use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'portofolio';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['image'];

    // Dates
    protected $useTimestamps = false;
}
