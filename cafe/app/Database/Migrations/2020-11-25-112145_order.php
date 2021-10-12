<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
			

			'id_pelanggan' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],

			'tgl_order' => [
				'type' => 'DATETIME',
			],


			'total' => [
				'type' => 'INT',
				'constraint' => 15,
			],

			'bayar' => [
				'type' => 'INT',
				'constraint' => 11,
			],

			'kembalian' => [
				'type' => 'INT',
				'constraint' => 11,
			],

			'status' => [
				'type' => 'INT',
				'constraint' => 11,
			],

			
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_pelanggan', 'tbl_pelanggan', 'id');
		$this->forge->createTable('tbl_order');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_order');
	}
}
