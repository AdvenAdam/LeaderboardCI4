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
			'NIM'       => [
					'type'       => 'VARCHAR',
					'constraint' => '20',
			],
			'Nama' => [
					'type' => 'varchar',
					'constraint' => '20',
			],
			'Kelas'       => [
					'type'       => 'VARCHAR',
					'constraint' => '20',
			],
			'Email' => [
					'type' => 'varchar',
					'constraint' => '100',
			],
			'No_HP'       => [
					'type'       => 'VARCHAR',
					'constraint' => '20',
			],
			'Alamat' => [
				'type' => 'text',
			],
			'Nilai'       => [
					'type'       => 'INT',
					'constraint' => '5',
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
		$this->forge->dropTable('tbl_siswa');
	}
}
