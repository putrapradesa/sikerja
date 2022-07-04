<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterBonAddTanggalSelesai extends Migration
{
    public function up()
    {
        $this->forge->addColumn('bon', ['TanggalSelesai DATETIME']);
    }

    public function down()
    {
        $this->forge->dropColumn('bon', 'TanggalSelesai');
    }
}
