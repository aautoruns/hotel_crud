<?php

namespace App\Models;

use CodeIgniter\Model;

class HotelModel extends Model
{

    protected $table            = 'tbl_hotel';
    protected $allowedFields    = ['id', 'nama_hotel', 'bintang', 'alamat', 'email', 'telp'];


    public function getAllHotel()
    {
        return $this->db->table('tbl_hotel')->get()->getResultArray();
    }
    public function getHotelById($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
