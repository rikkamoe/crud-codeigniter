<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cars extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name_car'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'type_car'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'description_car'       => [
				'type'       => 'LONGTEXT',
			],
			'price_car'       => [
				'type'       => 'INT',
				'constraint' => '50',
			],
			'img_car'       => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('cars');
	}

	public function down()
	{
		$this->forge->dropTable('cars');
	}
}
