<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['biodata'] = $model->findAll();
        return view('mahasiswa/display_mahasiswa', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->find($nim);
        return view('mahasiswa/display_mahasiswa_detail', $data);
    }

    // tampilkan form
    public function form()
    {
        return view('mahasiswa/form_mahasiswa'); 
        // pastikan file-nya ada di app/Views/mahasiswa/form_mahasiswa.php
    }

    // simpan data + validasi
    public function simpan()
    {
        helper(['form']);

        $rules = [
            'nim'           => 'required|numeric|is_unique[biodata.nim]',
            'nama_lengkap'  => 'required|min_length[3]',
            'jenis_kelamin' => 'required|in_list[L,P]',
            'tanggal_lahir' => 'required|valid_date[Y-m-d]',
        ];

        if (! $this->validate($rules)) {
            return view('mahasiswa/form_mahasiswa', [
                'validation' => $this->validator
            ]);
        }

        $model = new MahasiswaModel();
        $model->insert([
            'nim'           => $this->request->getPost('nim'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        ]);

        return redirect()->to('/mahasiswa');
    }
}
