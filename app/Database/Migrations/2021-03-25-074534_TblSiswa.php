<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblSiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nim'       => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'nama' => [
				'type' => 'varchar',
				'constraint' => '20',
			],
			'kelas'       => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'email' => [
				'type' => 'varchar',
				'constraint' => '100',
			],
			'no_hp'       => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'alamat' => [
				'type' => 'text',
			],
			'nilai'       => [
				'type'       => 'INT',
				'constraint' => '5',
			],
			'foto'       => [
				'type'       => 'Varchar',
				'constraint' => '225',
			],
			'created_at'       => [
				'type'       => 'datetime',
			],
			'updated_at'       => [
				'type'       => 'datetime',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_siswa');
	}

	public function down()
	{
	}
}
