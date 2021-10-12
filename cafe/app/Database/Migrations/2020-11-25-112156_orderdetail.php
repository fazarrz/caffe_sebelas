<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orderdetail extends Migration
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
			
			'id_order' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],

			'id_menu' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],

			'jumlah' => [
				'type' => 'INT',
				'constraint' => 10,
			],

			'harga_jual' => [
				'type' => 'INT',
				'constraint' => 10,
			],

			'statusorder' => [
				'type' => 'INT',
				'constraint' => 11,
			],

						
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_order', 'tbl_order', 'id');
		$this->forge->addForeignKey('id_menu', 'tbl_menu', 'id');
		$this->forge->createTable('tbl_orderdetail');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->createTable('tbl_orderdetail');
	}
}
