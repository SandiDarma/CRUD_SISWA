<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'id_siswa'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'nis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'kelas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			
			'tanggal_lahir' => [
				'type'           => 'DATE'
			],
			'tempat_lahir' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'alamat' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'jenis_kelamin'       => [
				'type'              => 'ENUM',
				'constraint'        => "'laki-laki','perempuan'",
			],
            'agama'       => [
				'type'              => 'ENUM',
				'constraint'        => "'islam','kristen','katholik','protestan','khonghucu','buddha','hindu'",
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_siswa');
		$this->forge->createTable('siswa');
	}

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
