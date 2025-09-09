<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display()
    {
        $model=new MahasiswaModel();

        $data['biodata']=$model->getMahasiswa();
    
        return view('/mahasiswa/display_mahasiswa', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $data['mhs'] = $model->getMahasiswaByNim($nim); 

        if (!$data['mhs']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan NIM $nim tidak ditemukan.");
        }

        return view('mahasiswa/display_mahasiswa_detail', $data);
    }

}