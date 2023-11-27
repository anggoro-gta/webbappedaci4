<?php

namespace App\Models;

use CodeIgniter\Model;

class bidangpmmModel extends Model
{
    protected $table = 'bidang_pmm';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdatapmm()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('bidang_pmm');
        // $builder->select('id,navbar,judul,teks');       
        $query = $builder->get();

        return $query->getResultArray();
    }
}
