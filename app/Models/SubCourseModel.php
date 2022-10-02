<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCourseModel extends Model
{
    protected $table            = 'sub_course';
    protected $primaryKey       = 'id_sub_curse';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['title', 'deskripsi', 'step', 'level', 'hours'];

    // Dates
    protected $useTimestamps = false;
}
