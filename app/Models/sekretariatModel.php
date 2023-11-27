<?php

namespace App\Models;

use CodeIgniter\Model;

class sekretariatModel extends Model
{
    protected $table = 'sekretariat';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdatasekret()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('sekretariat');
        // $builder->select('id,navbar,judul,teks');       
        $query = $builder->get();

        return $query->getResultArray();
    }
}
