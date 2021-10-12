<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
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
			
			'pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 225,
			],

			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 225,
			],

			'no_telp' => [
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

			'aktif' => [
				'type' => "INT",
				'constraint' => 11,
			],


			
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('tbl_pelanggan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_pelanggan');
	}
}
