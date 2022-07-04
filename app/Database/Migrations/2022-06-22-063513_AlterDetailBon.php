<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterDetailBon extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('detailbon', 'Keterangan');
        $this->forge->addColumn('bon', ['Keterangan TEXT']);
    }

    public function down()
    {
        $this->forge->addColumn('detailbon', ['Keterangan TEXT']);
        $this->forge->dropColumn('bon', 'Keterangan');
    }
}
