<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
			'Userrnam'       => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'Password' => [
				'type' => 'varchar',
				'constraint' => '20',
			],
			'Avatar'       => [
				'type'       => 'VARCHAR',
				'constraint' => '20',
			],
			'Email' => [
				'type' => 'varchar',
				'constraint' => '100',
			],
			'created_at'       => [
				'type'       => 'datetime',
			],
			'updated_at'       => [
				'type'       => 'datetime',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_cth');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_cth');
	}
}
