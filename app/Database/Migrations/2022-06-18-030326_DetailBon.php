<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailBon extends Migration
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

			'BonId'       => [
				'type'           => 'INT',
				'constraint'     => '11'
			],
			'Alat&Bahan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'Keterangan' => [
				'type'           => 'TEXT'
				
			],
			'Jumlah'      => [
				'type'           => 'INT',
				'constraint'     => '11',
			],

            
		]);

		// Membuat primary key
		$this->forge->addKey('Id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('DetailBon', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('DetailBon', TRUE);
    }
}
