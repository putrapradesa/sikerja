<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table      = 'account';
    protected $primaryKey = 'Id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['Nama', 'Username', 'Password', 'Role', 'CreatedUtc', 'IsDelete'];

}
