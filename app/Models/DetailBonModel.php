<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailBonModel extends Model
{
    protected $table      = 'detailbon';
    protected $primaryKey = 'Id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['CreatedBy', 'IsDeleted', 'DeletedUtc', 'BonId', 'Alat&Bahan', 'Jumlah'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->builder = $db->table($this->table);
    }

    function input_data($data)
    {
        $process = $this->builder->insertBatch($data);

        if($process){
            return true;
        }else{
            return false;
        }
    }

}
