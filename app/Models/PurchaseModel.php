<?php

namespace App\Models;

use CodeIgniter\Model;

class PurchaseModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'purchase';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;    
    protected $allowedFields    = ['id_user','id_course','id_bank','kode_promo','harga_bayar','status'];

    // Dates
    protected $useTimestamps = false;    
}
