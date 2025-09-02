<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    // READ: Tampilkan semua mahasiswa (dengan pencarian)
    public function index()
    {
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $data['mahasiswa'] = $this->mahasiswaModel->search($keyword);
        } else {
            $data['mahasiswa'] = $this->mahasiswaModel->findAll();
        }

        return view('mahasiswa/index', $data);
    }

    // CREATE: Form tambah mahasiswa
    public function create()
    {
        return view('mahasiswa/create');
    }

    // STORE: Simpan data baru
    public function store()
    {
        $this->mahasiswaModel->insert([
            'nim'   => $this->request->getPost('nim'),
            'nama'  => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    // READ DETAIL: Tampilkan detail mahasiswa
    public function detail($id)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->find($id);
        return view('mahasiswa/detail', $data);
    }

    // EDIT: Form edit mahasiswa
    public function edit($id)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->find($id);
        return view('mahasiswa/edit', $data);
    }

    // UPDATE: Simpan perubahan data
    public function update($id)
    {
        $this->mahasiswaModel->update($id, [
            'nim'   => $this->request->getPost('nim'),
            'nama'  => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
        ]);

        return redirect()->to('/mahasiswa');
    }

    // DELETE: Hapus mahasiswa
    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);
        return redirect()->to('/mahasiswa');
    }
}
