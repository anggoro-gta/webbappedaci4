<?php

namespace App\Models;

use CodeIgniter\Model;

class gbrnewModel extends Model
{
    protected $table = 'gbr_new';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];

    public function getgbrnewbyid($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('gbr_new');
        // $builder->select('id,navbar,judul,teks');
        $array = ['id' => $id];
        $builder->where($array);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
