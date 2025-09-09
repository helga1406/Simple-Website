<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';        // nama tabel di database
    protected $primaryKey = 'username';     // primary key = username
    protected $allowedFields = ['username', 'password'];

    // fungsi ambil data user berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
