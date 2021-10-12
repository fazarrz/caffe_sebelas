<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
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

			'kategori' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],

		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('tbl_kategori');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_kategori');
	}
}
