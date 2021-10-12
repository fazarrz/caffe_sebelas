<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
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
			
			'menu' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],

			'id_kategori' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],

			'gambar' => [
				'type' => 'TEXT',
			],

			'harga' => [
				'type' => 'INT',
				'constraint' => 10,
			],

			'deskripsi' => [
				'type' => 'TEXT',
			],
			
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_kategori', 'tbl_kategori', 'id');
		$this->forge->createTable('tbl_menu');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_menu');
	}
}
