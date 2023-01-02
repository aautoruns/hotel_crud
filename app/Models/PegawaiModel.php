<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{

    protected $table            = 'pegawai';
    protected $allowedFields    = ['nama', 'alamat', 'email', 'telp', 'posisi', 'gambar'];


    public function getAllPegawai()
    {
        return $this->db->table('pegawai')->get()->getResultArray();
    }
    public function getPegawaiById($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
