<?php

namespace App\Models;

use CodeIgniter\Model;

class gbrgerakModel extends Model
{
    protected $table = 'gbr_gerak';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];

    public function getgbrgerak()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('gbr_gerak');
        $builder->select('id, nama_file, lokasi, ket');
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function getnamaskpd($kode_user)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('fullname');
        $array = ['kode_user' => $kode_user];
        $builder->where($array);
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function updatepass($pass, $kode_skpd)
    {
        date_default_timezone_set('Asia/Jakarta');
        $updatedate = date("Y-m-d H:i:s");
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $data = [
            'password_hash'  => $pass,
            'updated_at' => $updatedate,
        ];

        $builder->where('id', $kode_skpd);
        $builder->update($data);
    }
}
