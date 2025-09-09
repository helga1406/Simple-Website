<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('display_home'); // panggil display_home.php
    }
}
