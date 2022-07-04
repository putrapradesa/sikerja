<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterAccount extends Migration
{
    public function up()
    {
        $this->forge->addColumn('account', ['IsDelete BOOLEAN']);
    }

    public function down()
    {
        $this->forge->dropColumn('account', 'IsDelete');
    }
}
