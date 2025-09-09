<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display()
    {
        $model = new MahasiswaModel();

        // Ambil data
        $biodata = $model->getMahasiswa();

        // Masukkan ke template2
        $data = [
            'title'   => 'Daftar Mahasiswa',
            'content' => view('mahasiswa/display_mahasiswa', ['biodata' => $biodata])
        ];

        return view('template2', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $mhs   = $model->getMahasiswaByNim($nim);

        if (!$mhs) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(
                "Mahasiswa dengan NIM $nim tidak ditemukan."
            );
        }

        // Panggil detail view lewat template
        $data = [
            'title'   => "Detail Mahasiswa $nim",
            'content' => view('mahasiswa/display_mahasiswa_detail', ['mhs' => $mhs])
        ];

        return view('template2', $data);
    }
}
