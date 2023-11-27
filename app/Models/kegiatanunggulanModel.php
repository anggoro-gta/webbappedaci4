<?php

namespace App\Models;

use CodeIgniter\Model;

class kegiatanunggulanModel extends Model
{
    protected $table = 'kegiatan_unggulan';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getkegiatanunggulan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('kegiatan_unggulan');
        // $builder->select('id,navbar,judul,teks');
        $array = ['id' => 1];
        $builder->where($array);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
