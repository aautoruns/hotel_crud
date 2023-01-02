<?php

namespace App\Controllers;

use \App\Models\CheckinModel;
use \App\Models\KamarModel;
use \App\Models\TamuModel;

class Checkin extends BaseController
{
    protected $checkinModel;
    protected $kamarModel;
    protected $tamuModel;

    public function __construct()
    {
        $this->checkinModel =  new CheckinModel();
        $this->kamarModel =  new KamarModel();
        $this->tamuModel =  new TamuModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Check In',
            'checkin' => $this->checkinModel->getAllCheckin()
        ];

        return view('checkin/index', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Data Pegawai',
            'checkin' => $this->checkinModel->getAllCheckin()
        ];

        return view('checkin/cetak', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Data Check In | Tambah',
            'kamar' => $this->kamarModel->getAllKamar(),
            'tamu' => $this->kamarModel->getAllTamu(),
            'validation' => \Config\Services::validation()
        ];

        return view('checkin/tambah', $data);
    }

    public function simpan()
    {
        // dd(
        //     $this->request->getVar('idtamu'),
        //     $this->request->getVar('idkamar'),
        //     $this->request->getVar('checkin'),
        //     $this->request->getVar('duration'),
        // );

        if (!$this->validate([
            'idtamu ' => [
                'rules' => 'required|is_unique[tbl_checkin.idtamu]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} pegawai sudah terdaftar.'
                ]
            ],
            'idkamar ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'checkin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah checkin
            return redirect()->to('checkin/tambah')->withInput();
        }
        // validasi data sukses
        $this->checkinModel->save([
            'idtamu' => $this->request->getVar('idtamu'),
            'idkamar' => $this->request->getVar('idkamar'),
            'checkin' => $this->request->getVar('checkin'),
            'duration' => $this->request->getVar('duration'),
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!.');
        // kembali ke halaman index checkin
        return redirect()->to('/checkin');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Data Check In | Edit',
            'validation' => \Config\Services::validation(),
            'kamar' => $this->kamarModel->getAllKamar(),
            'tamu' => $this->kamarModel->getAllTamu(),
            'checkin' => $this->checkinModel->getCheckinById($id),
        ];
        // jika id data tidak ada di table
        if (empty($data['checkin'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $id . ' tidak ditemukan');
        };

        return view('checkin/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'idtamu ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'idkamar ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'checkin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah checkin
            return redirect()->to('checkin/edit/' . $this->request->getVar('id'))->withInput();
        }
        // validasi data sukses
        $this->checkinModel->save([
            'id' => $id,
            'idtamu' => $this->request->getVar('idtamu'),
            'idkamar' => $this->request->getVar('idkamar'),
            'checkin' => $this->request->getVar('checkin'),
            'duration' => $this->request->getVar('duration')
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil diedit!.');
        // kembali ke halaman index Pegawai
        return redirect()->to('/checkin');
    }

    public function delete($id)
    {
        $checkin = $this->checkinModel->find($id);

        $this->checkinModel->delete($id);
        // menampilkan pesan data sukses dihapus
        session()->setFlashdata('pesan', 'Data berhasil dihapus!..');
        // kembali ke halaman index mahasiswa
        return redirect()->to('checkin');
    }
}
