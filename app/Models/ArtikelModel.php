<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'artikel';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['judul', 'slug', 'isi_artikel', 'poster', 'status'];

    // Dates
    protected $useTimestamps = false;


    public function getArticleNotSlug($slug)
    {
        $sql = $this->db->table('artikel');
        $sql->select('*')->where('slug !=', $slug);
        return $sql->get()->getResultArray();
    }
}
