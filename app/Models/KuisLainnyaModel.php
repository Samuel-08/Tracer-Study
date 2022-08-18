<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisLainnyaModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Kuesioner_lainnya';
    // protected $useAutoIncrement = false;
    protected $primaryKey = 'id_kuis_lainnya';
    protected $protectFields = true;
    protected $allowedFields = [
        'pertanyaan',   'id_kuis_lainnya'
    ];
    public function savePertanyaan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function getUbah($id = true)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->where(['id_kuis_lainnya' => $id])->first();
        }
    }
    public function editBarang($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_kuis_lainnya', $id);
        return $builder->update($data);
    }

    public function getSimpanan1()
    {
        $info =  $this->db->table('Kuesioner_lainnya');

        $info->select('*');
        // $info->select('Kuesioner_lainnya.*');
        // $info->select('Kuesioner_bekerja.*');
        // $info->select('Kuesioner_lainnya.*');
        // $info->select('Kuesioner_lainnya.*');
        $info->from('Kuesioner_lainnya');
        $info->join('Kuesioner_bekerja', 'Kuesioner_lainnya.id_bekerja = Kuesioner_bekerja.id_bekerja');
        $info->join('Kuesioner_lainnya', 'Kuesioner_lainnya.id_lainnya = Kuesioner_lainnya.id_lainnya');
        $info->join('Kuesioner_lainnya', 'Kuesioner_bekerja.id_bekerja = Kuesioner_lainnya.id_bekerja');
        $join_query = $info->get();
        return $join_query;
    }
}
