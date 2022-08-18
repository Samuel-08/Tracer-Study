<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tbl_users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDelete = false;
    protected $protectFields = true;
    protected $allowedFields = [
        "id",
        "role",
        "nama",
        "nim",
        "email",
        "password",
        "status",
        "no_hp",
        "jenis_kelamin",
        "jurusan",
        "tahun_lulus",
        "kota_kelahiran",
        "agama",
        "created_at",
        "tgl_lahir",
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    protected $allowCallbacks = true;
    protected $beforeInsert = ["beforeInsert"];

    // Validation
    protected $cleanValidationRules = true;
    public function get_UserSum()
    { 
    }

    public function getBiodata($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id])->first();
        }
    }
    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }

        return $data;
    }
  
}
