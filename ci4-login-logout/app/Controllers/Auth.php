<?php 
namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->getUserByUsername($username);

        // Login tanpa hashing (password disimpan plaintext di DB)
        if ($user && $password === $user['password']) {
            $session->set([
                'username'  => $user['username'],
                'logged_in' => true
            ]);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Username atau password salah!');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
