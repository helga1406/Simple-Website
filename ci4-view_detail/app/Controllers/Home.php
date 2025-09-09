<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_display_helloworld');
    }

//     public function index()
//     {
//         echo "Hello World!";
//     }
}
