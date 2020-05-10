<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
