<?php

namespace App\Models;

use CodeIgniter\Model;

class tugasfungsiModel extends Model
{
    protected $table = 'tugas_fungsi';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdatatugasfungsi()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tugas_fungsi');
        // $builder->select('id,navbar,judul,teks');       
        $query = $builder->get();

        return $query->getResultArray();
    }
}
