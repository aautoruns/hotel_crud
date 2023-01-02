<?php

namespace App\Controllers;

use \App\Models\KamarModel;
use \App\Models\TipekamarModel;

class Kamar extends BaseController
{
    protected $kamarModel;
    protected $tipekamarModel;

    public function __construct()
    {
        $this->kamarModel =  new KamarModel();
        $this->tipekamarModel =  new TipekamarModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kamar',
            'kamar' => $this->kamarModel->getAllKamar()
        ];

        return view('kamar/index', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Data Kamar',
            'kamar' => $this->kamarModel->getAllKamar()
        ];

        return view('kamar/cetak', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Data Kamar | Tambah',
            'tipekamar' => $this->tipekamarModel->getAllTipekamar(),
            'validation' => \Config\Services::validation()
        ];

        return view('kamar/tambah', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'idkamar' => [
                'rules' => 'required|is_unique[kamar.idkamar]',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'nokamar' => [
                'rules' => 'required|is_unique[kamar.nokamar]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} kamar sudah terdaftar.',
                ]
            ],
            'idtipekamar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah kamar
            return redirect()->to('kamar/tambah')->withInput();
        }
        // validasi data sukses
        $this->kamarModel->save([
            'idkamar' => $this->request->getVar('idkamar'),
            'nokamar' => $this->request->getVar('nokamar'),
            'idtipekamar' => $this->request->getVar('idtipekamar'),
            'price' => $this->request->getVar('price')
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!.');
        // kembali ke halaman index Kamar
        return redirect()->to('/kamar');
    }

    public function edit($idkamar)
    {
        $data = [
            'title' => 'Data Kamar | Edit',
            'validation' => \Config\Services::validation(),
            'kamar' => $this->kamarModel->getKamarById($idkamar),
            'tipekamar' => $this->tipekamarModel->getTipekamarById(),
        ];
        // jika idkamar data tidak ada di table
        if (empty($data['kamar'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $idkamar . ' tidak ditemukan');
        };
        return view('kamar/edit', $data);
    }

    public function update($idkamar)
    {
        if (!$this->validate([
            'idkamar' => [
                'rules' => 'required|is_unique[kamar.idkamar]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} kamar sudah terdaftar.',
                ]
            ],
            'nokamar' => [
                'rules' => 'required|is_unique[kamar.nokamar]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} kamar sudah terdaftar.',
                ]
            ],
            'idtipekamar' => [
                'rules' => 'required|is_unique[kamar.idtipekamar]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} kamar sudah terdaftar.',
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah kamar
            return redirect()->to('kamar/edit/' . $this->request->getVar('idkamar'))->withInput();
        }
        // validasi data sukses
        $this->kamarModel->save([
            'idkamar' => $this->request->getVar('idkamar'),
            'nokamar' => $this->request->getVar('nokamar'),
            'idtipekamar' => $this->request->getVar('idtipekamar'),
            'price' => $this->request->getVar('price')
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil diedit!.');
        // kembali ke halaman index kamar
        return redirect()->to('/kamar');
    }

    public function delete($idkamar)
    {
        $this->kamarModel->delete($idkamar);
        // menampilkan pesan data sukses dihapus
        session()->setFlashdata('pesan', 'Data berhasil dihapus!..');
        // kembali ke halaman index mahasiswa
        return redirect()->to('kamar');
    }
}
