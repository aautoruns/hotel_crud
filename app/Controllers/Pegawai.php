<?php

namespace App\Controllers;

use \App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    protected $pegawaiModel;

    public function __construct()
    {
        $this->pegawaiModel =  new PegawaiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pegawai',
            'pegawai' => $this->pegawaiModel->getAllPegawai()
        ];

        return view('pegawai/index', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Data Pegawai',
            'pegawai' => $this->pegawaiModel->getAllPegawai()
        ];

        return view('pegawai/cetak', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Data Pegawai | Tambah',
            'validation' => \Config\Services::validation()
        ];

        return view('pegawai/tambah', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[pegawai.nama]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} pegawai sudah terdaftar.'
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
            'telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'posisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png,image/webp]',
                'errors' => [
                    'max_size' => 'Pilih File / Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah pegawai
            return redirect()->to('pegawai/tambah')->withInput();
        }
        // ambil gambar
        $fileSampul = $this->request->getFile('gambar');

        // apakah tidak ada gambar yang di upload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            // generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();

            // pindahkan file ke folder img
            $fileSampul->move('img/pegawai', $namaSampul);
        }
        // validasi data sukses
        $this->pegawaiModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'telp' => $this->request->getVar('telp'),
            'posisi' => $this->request->getVar('posisi'),
            'gambar' => $namaSampul
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!.');
        // kembali ke halaman index Pegawai
        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Data Pegawai | Edit',
            'validation' => \Config\Services::validation(),
            'pegawai' => $this->pegawaiModel->getPegawaiById($id),
        ];
        // jika id data tidak ada di table
        if (empty($data['pegawai'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $id . ' tidak ditemukan');
        };

        return view('pegawai/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate([
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
            'telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'posisi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png,image/jpeg,image/webp]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ]
        ])) {
            // jika data tidak valid kembalikan ke halaman tambah pegawai
            return redirect()->to('pegawai/edit/' . $this->request->getVar('id'))->withInput();
        }
        // ambil gambar
        $fileSampul = $this->request->getFile('gambar');

        // apakah tidak ada gambar yang di upload
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('gambarLama');
        } else {
            // generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();

            // pindahkan file ke folder img
            $fileSampul->move('img/pegawai', $namaSampul);

            // hapus file lama
            if ($this->request->getVar('gambarLama') != 'default.jpg') {
                unlink('img/pegawai/' . $this->request->getVar('gambarLama'));
            }
        }
        // validasi data sukses
        $this->pegawaiModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'telp' => $this->request->getVar('telp'),
            'posisi' => $this->request->getVar('posisi'),
            'gambar' => $namaSampul
        ]);
        // menampilkan pesan sukses
        session()->setFlashdata('pesan', 'Data berhasil diedit!.');
        // kembali ke halaman index Pegawai
        return redirect()->to('/pegawai');
    }

    public function delete($id)
    {
        $pegawai = $this->pegawaiModel->find($id);

        // cek jika gambar default
        if ($pegawai['gambar'] != 'default.jpg') {
            // hapus gambar
            unlink('img/pegawai/' . $pegawai['gambar']);
        }

        $this->pegawaiModel->delete($id);
        // menampilkan pesan data sukses dihapus
        session()->setFlashdata('pesan', 'Data berhasil dihapus!..');
        // kembali ke halaman index mahasiswa
        return redirect()->to('pegawai');
    }
}
