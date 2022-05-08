<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class SiswaModel extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id_siswa";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_siswa', 'nama', 'nis', 'kelas', 'tanggal_lahir','tempat_lahir', 'alamat','jenis_kelamin','agama',];
}