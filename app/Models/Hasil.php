<?php

namespace App\Models;

use CodeIgniter\Model;

class Hasil extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'hasil';
    protected $primaryKey       = 'id_hasil'; 
    protected $allowedFields    = [
        'id_hasil', 'id_kuis',  'id_user', 'nama',  'kategori', 'hasil1', 'hasil2', 'hasil3', 'hasil4','hasil5', 'hasil6', 'hasil7', 'hasil8', 'hasil9', 'hasil10', 'hasil11', 'hasil12', 'hasil13', 'hasil14', 'hasil15'
    ];

    // Dates 
}
