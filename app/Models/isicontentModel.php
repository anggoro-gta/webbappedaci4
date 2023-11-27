<?php

namespace App\Models;

use CodeIgniter\Model;

class isicontentModel extends Model
{
    protected $table = 'isi_content';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];

    public function isicontentfirst()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('isi_content');
        $builder->select('id,navbar,judul,teks');
        $array = ['id' => 1];
        $builder->where($array);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function isicontentbyid($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('isi_content');
        // $builder->select('id,navbar,judul,teks');
        $array = ['id' => $id];
        $builder->where($array);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
