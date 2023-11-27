<?php

namespace App\Models;

use CodeIgniter\Model;

class ungkapannetizenModel extends Model
{
    protected $table = 'ungkapan_netizen';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];

    public function isicontentfirst($arraynetizen)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('ungkapan_netizen');
        $builder->insert($arraynetizen);
    }
}
