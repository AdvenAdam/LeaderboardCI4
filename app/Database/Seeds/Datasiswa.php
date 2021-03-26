<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Datasiswa extends Seeder
{
	public function run()
	{
		$data = [
			'NIM' 		=> 'K3517213',
			'Nama'    => 'Adven Adam',
			'Kelas'    => 'A',
			'Email'    => 'darth@theempire.com',
			'No_HP'    => '+6208521205',
			'Alamat'    => 'earth',
			'Nilai'    => 0,
	];

	// Simple Queries
	// $this->db->query("INSERT INTO tbl_siswa (NIM,Nama,Kelas,Email,No_HP,Alamat,Nilai) VALUES(:NIM:, :Nama:, :Kelas:, :Email:, :No_HP:, :Alamat:, :Nilai:)", $data);

	// Using Query Builder
	$this->db->table('tbl_siswa')->insert($data);	}
}
