<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterBon extends Migration
{
    public function up()
    {
        $this->forge->addColumn('bon', ['NamaBagian VARCHAR(100)']);
    }

    public function down()
    {
        $this->forge->dropColumn('bon', 'NamaBagian');
    }
}
