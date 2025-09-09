<?php
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'biodata';

    //fungsi untuk ambil data dengan query mentah 
    public function getMahasiswa()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM biodata");
        return $query->getResultArray();//kemblikan sebagai array
    }

    public function getMahasiswaByNim($nim)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM biodata WHERE nim = ?", [$nim]);
        return $query->getRowArray();
    }

}