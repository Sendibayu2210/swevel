<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;    
    protected $allowedFields    = ['nama','email','password','foto','level'];

    // Dates
    protected $useTimestamps = false;
   
}
