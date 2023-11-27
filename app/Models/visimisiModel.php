<?php

namespace App\Models;

use CodeIgniter\Model;

class visimisiModel extends Model
{
    protected $table = 'visi_misi';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdatavisimisi()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('visi_misi');
        // $builder->select('id,navbar,judul,teks');       
        $query = $builder->get();

        return $query->getResultArray();
    }
}
