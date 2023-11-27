<?php

namespace App\Models;

use CodeIgniter\Model;

class bidangesdaModel extends Model
{
    protected $table = 'bidang_esda';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdataesda()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('bidang_esda');
        // $builder->select('id,navbar,judul,teks');       
        $query = $builder->get();

        return $query->getResultArray();
    }
}
