<?php

namespace App\Models;

use CodeIgniter\Model;

class beritaModel extends Model
{
    protected $table = 'berita';
    protected $useTimestamps = true;
    // protected $allowedFields = ['email', 'username'];

    public function getallberita()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('berita');        
        $query = $db->query('SELECT
            id_berita,
            judul,
            isi,
            DATE_FORMAT( tanggal, "%d-%m-%Y" ) AS tgl_formated,
            gambar,
            lokasi,
            ket,
            pengirim,
            publish 
        FROM
            berita
        WHERE
            publish = "YA"');

        return $query->getResultArray();
    }

    public function getPaginate($num, $keyword = null)
    {
        $db = \Config\Database::connect();
        $builder = $this->builder();
        $builder->select('id_berita,
        judul,
        isi,
        DATE_FORMAT( tanggal, "%d-%m-%Y" ) AS tgl_formated,
        gambar,
        lokasi,
        ket,
        pengirim,
        publish');
        $array = ['publish' => 'YA'];
        $builder->where($array);
        if ($keyword != '') {
            $builder->like('judul', $keyword)->where($array);
            $builder->orLike('isi', $keyword)->where($array);
            $builder->orLike('ket', $keyword)->where($array);
        }

        return [
            'beritakediriraya' => $this->paginate($num),
            'pager' => $this->pager
        ];
    }

    public function getberitalatestdua()
    {
        $db = \Config\Database::connect();
        // $builder = $db->table('berita');        
        $query = $db->query('SELECT
            id_berita,
            judul,
            isi,
            DATE_FORMAT( tanggal, "%d-%m-%Y" ) AS tgl_formated,
            gambar,
            lokasi,
            ket,
            pengirim,
            publish 
        FROM
            berita
        WHERE
            publish = "YA"
		ORDER BY
			tanggal DESC
		LIMIT 2');

        return $query->getResultArray();

        // $db = \Config\Database::connect();
        // $builder = $db->table('berita');
        // $array = ['publish' => 'YA'];
        // $builder->where($array);
        // $builder->orderBy('tanggal', 'DESC');
        // $builder->limit(2);
        // $query = $builder->get();

        // return $query->getResultArray();
    }

    public function getberitabyid($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('berita');
        // $builder->select('id,navbar,judul,teks');
        $array = ['publish' => 'YA', 'id_berita' => $id];
        $builder->where($array);
        $query = $builder->get();

        return $query->getResultArray();
    }
}
