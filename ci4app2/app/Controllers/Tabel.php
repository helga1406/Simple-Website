<?php

namespace App\Controllers;

class Tabel extends BaseController
{
    public function index()
    {
        // Data contoh
        $data['dataTabel'] = [
            ['id' => 1, 'nama' => 'Andi',  'nim' => '12345', 'kelas' => 'TI-1A'],
            ['id' => 2, 'nama' => 'Budi',  'nim' => '12346', 'kelas' => 'TI-1B'],
            ['id' => 3, 'nama' => 'Citra', 'nim' => '12347', 'kelas' => 'TI-1C'],
        ];

        // Kirim data ke View
        return view('tabel_view', $data);
    }
}
