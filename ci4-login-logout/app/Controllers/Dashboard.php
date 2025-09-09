<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();

        // Cek apakah user sudah login
        if (!$session->get('logged_in')) {
            return redirect()->to('/auth/login');
        }

        // Panggil view display.php (bukan index.php lagi)
        return view('display_dashboard');
    }
}
