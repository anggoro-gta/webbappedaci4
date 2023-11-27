<?php

namespace App\Models;

use CodeIgniter\Model;

class informasipdfModel extends Model
{
    protected $table = 'informasi_pdf';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];    

    public function getdatainformasipdfbyid($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('informasi_pdf');
        // $builder->select('id,navbar,judul,teks');  
        $array = ['id' => $id];
        $builder->where($array);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
