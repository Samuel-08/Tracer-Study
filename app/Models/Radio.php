<?php

namespace App\Models;

use CodeIgniter\Model;

class Radio extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'radio';
    protected $primaryKey       = 'id_radio';

    protected $allowedFields    = [

        'id_radio',
        'opsi'
    ];
}
