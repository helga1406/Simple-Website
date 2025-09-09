<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama_lengkap', 'jenis_kelamin', 'tanggal_lahir'];

    // ambil semua data
    public function getMahasiswa()
    {
        return $this->findAll(); 
    }

    // ambil 1 data berdasarkan nim
    public function getMahasiswaByNim($nim)
    {
        return $this->where('nim', $nim)->first();
    }
}
