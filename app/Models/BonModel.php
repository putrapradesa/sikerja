<?php

namespace App\Models;

use CodeIgniter\Model;

class BonModel extends Model
{
    protected $table      = 'bon';
    protected $primaryKey = 'Id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['CreatedBy', 'IsDeleted', 'DeletedUtc', 'NamaPemesan', 'TanggalPemesan', 'IdBagian', 'Request', 'BagianPenerima', 'PenerimaTugas', 'Status', 'Tipe', 'NamaBagian', 'Keterangan'];

}
