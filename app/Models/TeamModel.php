<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'team';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama', 'jabatan', 'image', 'linkedin', 'instagram', 'facebook'];

    // Dates
    protected $useTimestamps = false;
}
