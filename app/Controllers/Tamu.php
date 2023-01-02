<?php

namespace App\Controllers;

use \App\Models\TamuModel;
use \App\Models\CheckinModel;

class Tamu extends BaseController
{
    protected $tamuModel;
    protected $checkinModel;

    public function __construct()
    {
        $this->tamuModel =  new TamuModel();
        $this->checkinModel =  new CheckinModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Tamu',
            'tamu' => $this->tamuModel->getAllTamu()
        ];

        return view('tamu/index', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Data Kamar',
            'tamu' => $this->tamuModel->getAllTamu()
        ];

        return view('tamu/cetak', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Data Tamu | Tambah',
            'checkin' => $this->checkinModel->getAllCheckin(),
            'validation' => \Config\Services::validation()
        ];

        return view('tamu/tambah', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'idtamu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => 'format {field} salah'
                ]
            ],
            'phone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah tamu
            return redirect()->to('tamu/tambah')->withInput();
        }
        // validasi data sukses
        $this->tamuModel->save([
            'idtamu' => $this->request->getVar('idtamu'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!.');
        // kembali ke halaman index Tamu
        return redirect()->to('/tamu');
    }

    public function edit($idtamu)
    {
        $data = [
            'title' => 'Data Tamu | Edit',
            'validation' => \Config\Services::validation(),
            'tamu' => $this->tamuModel->getTamuById($idtamu),
        ];
        // jika id data tidak ada di table
        if (empty($data['tamu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $idtamu . ' tidak ditemukan');
        };

        return view('tamu/edit', $data);
    }

    public function update($idtamu)
    {

        if (!$this->validate([
            'idtamu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => 'format {field} salah'
                ]
            ],
            'phone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah tamu
            return redirect()->to('tamu/edit/' . $this->request->getVar('idtamu'))->withInput();
        }
        // validasi data sukses
        $this->tamuModel->save([
            'idtamu' => $idtamu,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil diedit!.');
        // kembali ke halaman index Pegawai
        return redirect()->to('/tamu');
    }

    public function delete($idtamu)
    {
        $tamu = $this->tamuModel->find($idtamu);

        $this->tamuModel->delete($idtamu);
        // menampilkan pesan data sukses dihapus
        session()->setFlashdata('pesan', 'Data berhasil dihapus!..');
        // kembali ke halaman index mahasiswa
        return redirect()->to('tamu');
    }
}
