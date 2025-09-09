<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'   => 'Halaman Home',
            'content' => view('home')  // isi ke template
        ];

        return view('template2', $data);
    }
}
