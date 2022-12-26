<?php

namespace App\Models;

use CodeIgniter\Model;

class FaqModel extends Model
{
    protected $table            = 'faq';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['from', 'question', 'answer', 'email','telepon','kategori'];
    protected $useTimestamps = true;
}
