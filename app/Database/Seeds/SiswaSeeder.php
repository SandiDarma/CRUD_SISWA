<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
		$data = [
			[
				'nama'          =>  'Anton',
				'nis'           =>  '12345',
				'kelas'         =>  '10',
				'tanggal_lahir' =>  'desember',
				'tempat_lahir'  =>  'bogor',
                'alamat'	    =>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'jenis_kelamin' =>  'perempuan',
                'agama'         =>  'kristen'
			],
			[
				'nama'          =>  'Anton',
				'nis'           =>  '12345',
				'kelas'         =>  '10',
				'tanggal_lahir' =>  'desember',
				'tempat_lahir'  =>  'bogor',
                'alamat'	    =>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'jenis_kelamin' =>  'laki-laki',
                'agama'         =>  'islam'
			],
			[
				'nama'          =>  'Anton',
				'nis'           =>  '12345',
				'kelas'         =>  '10',
				'tanggal_lahir' =>  'desember',
				'tempat_lahir'  =>  'bogor',
                'alamat'	    =>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'jenis_kelamin' =>  'laki-laki',
                'agama'         =>  'buddha'
			]
		];
		$this->db->table('siswa')->insertBatch($data);
	}
}
