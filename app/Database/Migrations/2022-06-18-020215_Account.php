<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use DateTime;

class Account extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'Id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'Nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'Username'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'Password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'Role'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],

            'CreatedUtc DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('Id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('Account', TRUE);
    }

    public function down()
    {
        //

        $this->forge->dropTable('Account');
    }
}
