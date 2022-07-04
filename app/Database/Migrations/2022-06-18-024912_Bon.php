<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bon extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'Id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],

            'CreatedUtc DATETIME DEFAULT CURRENT_TIMESTAMP',

			'CreatedBy'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

            'IsDeleted'       => [
				'type'           => 'BOOLEAN'
			],

            'DeletedUtc'       => [
				'type'           => 'DATETIME'
			],

			'NamaPemesan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'TanggalPemesan' => [
				'type'           => 'DATETIME'
			],
			'IdBagian'      => [
				'type'           => 'INT',
				'constraint'     => '10',
            ],
            'Request'       => [
				'type'           => 'TEXT'
			],
            'BagianPenerima'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'PenerimaTugas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'Status'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
            'Tipe'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

            
		]);

		// Membuat primary key
		$this->forge->addKey('Id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('Bon', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('Bon', TRUE);
    }
}
