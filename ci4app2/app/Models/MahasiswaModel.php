<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nim', 'nama', 'kelas'];

    public function search($keyword)
    {
        return $this->table($this->table)
                    ->like('nim', $keyword)
                    ->orLike('nama', $keyword)
                    ->orLike('kelas', $keyword)
                    ->findAll();
    }
}
