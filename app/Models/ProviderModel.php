<?php

namespace App\Models;

use CodeIgniter\Model;

class ProviderModel extends Model
{
    protected $table = 'provider';
    protected $primaryKey = 'id_provider';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_provider'];
}
