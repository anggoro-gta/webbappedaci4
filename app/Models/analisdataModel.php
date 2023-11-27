<?php

namespace App\Models;

use CodeIgniter\Model;

class analisdataModel extends Model
{
    protected $table = 'analisis_data';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdataanalisdata()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('analisis_data');
        // $builder->select('id,navbar,judul,teks');       
        $query = $builder->get();

        return $query->getResultArray();
    }
}
