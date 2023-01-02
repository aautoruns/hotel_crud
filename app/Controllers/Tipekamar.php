<?php

namespace App\Controllers;

use \App\Models\TipekamarModel;

class Tipekamar extends BaseController
{
    protected $tipekamarModel;

    public function __construct()
    {
        $this->tipekamarModel =  new TipekamarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kamar',
            'tipekamar' => $this->tipekamarModel->getAllTipeKamar()
        ];

        return view('tipekamar/index', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Data Tipe Kamar',
            'tipekamar' => $this->tipekamarModel->getAllTipeKamar()
        ];

        return view('tipekamar/cetak', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Data Tipe Kamar | Tambah',
            'validation' => \Config\Services::validation()
        ];

        return view('tipekamar/tambah', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'idtipekamar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'namatipe' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'ukuran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah kamar
            return redirect()->to('tipekamar/tambah')->withInput();
        }
        // validasi data sukses
        $this->tipekamarModel->save([
            'idtipekamar' => $this->request->getVar('idtipekamar'),
            'namatipe' => $this->request->getVar('namatipe'),
            'ukuran' => $this->request->getVar('ukuran'),
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!.');
        // kembali ke halaman index Tipe Kamar
        return redirect()->to('/tipekamar');
    }

    public function edit($idtipekamar)
    {
        $data = [
            'title' => 'Data Tipe Kamar | Edit',
            'validation' => \Config\Services::validation(),
            'tipekamar' => $this->tipekamarModel->getTipekamarById($idtipekamar),
        ];
        // jika id data tidak ada di table
        if (empty($data['tipekamar'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $idtipekamar . ' tidak ditemukan');
        };

        return view('tipekamar/edit', $data);
    }

    public function update($idtipekamar)
    {
        if (!$this->validate([
            'idtipekamar' => [
                'rules' => 'required|is_unique[tipekamar.idtipekamar]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
            'namatipe' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'ukuran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah kamar
            return redirect()->to('tipekamar/edit/' . $this->request->getVar('idtipekamar '))->withInput();
        }
        // validasi data sukses
        $this->tipekamarModel->save([
            'idtipekamar ' => $this->request->getVar('idtipekamar'),
            'namatipe' => $this->request->getVar('namatipe'),
            'ukuran' => $this->request->getVar('ukuran'),
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil diedit!.');
        // kembali ke halaman index kamar
        return redirect()->to('/tipekamar');
    }

    public function delete($idtipekamar)
    {
        $this->tipekamarModel->delete($idtipekamar);
        // menampilkan pesan data sukses dihapus
        session()->setFlashdata('pesan', 'Data berhasil dihapus!..');
        // kembali ke halaman index mahasiswa
        return redirect()->to('/tipekamar');
    }
}
