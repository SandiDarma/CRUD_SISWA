<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswa;
 
    function __construct()
    {
        $this->siswa = new SiswaModel();
    }
 
    public function index()
    {
        $data['siswa'] = $this->siswa->findAll();
        return view('siswa/index', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->siswa->insert([
            'nama' => $this->request->getVar('nama'),
            'nis' => $this->request->getVar('nis'),
            'kelas' => $this->request->getVar('kelas'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama')
        ]);
        session()->setFlashdata('message', 'Tambah Data Siswa Berhasil');
        return redirect()->to('/siswa');
    }
    function edit($id)
    {
        $datasiswa = $this->siswa->find($id);
        if (empty($datasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Siswa Tidak ditemukan !');
        }
        $data['siswa'] = $datasiswa;
        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->siswa->update($id, [
            'nama' => $this->request->getVar('nama'),
            'nis' => $this->request->getVar('nis'),
            'kelas' => $this->request->getVar('kelas'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama')
        ]);
        session()->setFlashdata('message', 'Update Data Siswa Berhasil');
        return redirect()->to('/siswa');
    }

    function delete($id)
    {
        $datasiswa = $this->siswa->find($id);
        if (empty($datasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Siswa Tidak ditemukan !');
        }
        $this->siswa->delete($id);
        session()->setFlashdata('message', 'Delete Data Siswa Berhasil');
        return redirect()->to('/siswa');
    }

}
