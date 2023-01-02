<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{

    protected $table            = 'kamar';
    protected $allowedFields    = ['idkamar', 'nokamar', 'idtipekamar'];
    protected $primaryKey = 'idtipekamar';


    public function getAllKamar()
    {
        return $this->db->table('kamar')->get()->getResultArray();
    }
    public function getAllTamu()
    {
        return $this->db->table('tbl_tamu')->get()->getResultArray();
    }
    public function getKamarById($idkamar = false)
    {
        if ($idkamar == false) {
            return $this->findAll();
        }

        return $this->where(['idkamar' => $idkamar])->first();
    }
}
