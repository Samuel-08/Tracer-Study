<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kategori';
    protected $primaryKey       = 'id_kategori';
     protected $allowedFields    = ['id_kategori','kategori'];

  }
