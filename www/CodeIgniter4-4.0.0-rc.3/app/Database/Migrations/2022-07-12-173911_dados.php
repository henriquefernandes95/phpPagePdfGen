<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dados extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => "INT",
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'titulo' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'descricao' => [
				'type' => 'TEXT',
				'null' => TRUE,
			],
			'obs' => [
				'type' => 'TEXT',
				'null' => TRUE,
			],
		]);
		$this->forge->addKey('id',TRUE);
		$this->forge->createTable('dados');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('dados');
	}
}
