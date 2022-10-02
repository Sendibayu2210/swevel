<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'materi_course';
    protected $primaryKey       = 'id_materi';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
}
