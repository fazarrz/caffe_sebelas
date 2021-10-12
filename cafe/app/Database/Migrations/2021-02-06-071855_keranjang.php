<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keranjang extends Migration
{
	public function up()
	{
		$this->db->enableForeignKeyChecks();
		$this->forge->addField([

			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],

			'id_menu' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],

			'id_pelanggan' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],

		]);

			$this->forge->addKey('id', TRUE);
			$this->forge->addForeignKey('id_pelanggan', 'tbl_pelanggan', 'id');
			$this->forge->addForeignKey('id_menu', 'tbl_menu', 'id');
			$this->forge->createTable('tbl_keranjang');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->createTable('tbl_keranjang');
	}
}
