<?php

namespace App\Models;

use CodeIgniter\Model;

class bidangipwModel extends Model
{
    protected $table = 'bidang_ipw';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdataipw()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('bidang_ipw');
        // $builder->select('id,navbar,judul,teks');       
        $query = $builder->get();

        return $query->getResultArray();
    }
}
