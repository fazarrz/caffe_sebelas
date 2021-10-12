<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],

			'user' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 225,
			],

			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 225,
			],

			'level' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],

			'aktif' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('tbl_user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->createTable('tbl_user');
	}
}
