<?php

namespace App\Models;

use CodeIgniter\Model;

class TipekamarModel extends Model
{

    protected $table            = 'tipekamar';
    protected $allowedFields    = ['idtipekamar', 'namatipe', 'ukuran'];
   


    public function getAllTipekamar()
    {
        return $this->db->table('tipekamar')->get()->getResultArray();
    }
    public function getTipekamarById($idtipekamar = true)
    {
        if ($idtipekamar == false) {
            return $this->findAll();
        }

        return $this->where(['idtipekamar' => $idtipekamar])->first();
    }
}
