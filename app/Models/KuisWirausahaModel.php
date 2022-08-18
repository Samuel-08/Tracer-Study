<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisWirausahaModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Kuesioner_wirausaha';
    // protected $useAutoIncrement = false;
    protected $primaryKey = 'id_kuis_wirausaha';
    protected $protectFields = true;
    protected $allowedFields = [
        'pertanyaan',   'id_kuis_wirausaha'
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
            return $this->where(['id_kuis_wirausaha' => $id])->first();
        }
    }
    public function editBarang($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_kuis_wirausaha', $id);
        return $builder->update($data);
    }

    public function getSimpanan1()
    {
        $info =  $this->db->table('Kuesioner_wirausaha');

        $info->select('*');
        // $info->select('Kuesioner_wirausaha.*');
        // $info->select('Kuesioner_bekerja.*');
        // $info->select('Kuesioner_wirausaha.*');
        // $info->select('Kuesioner_lainnya.*');
        $info->from('Kuesioner_wirausaha');
        $info->join('Kuesioner_bekerja', 'Kuesioner_wirausaha.id_bekerja = Kuesioner_bekerja.id_bekerja');
        $info->join('Kuesioner_wirausaha', 'Kuesioner_wirausaha.id_wirausaha = Kuesioner_wirausaha.id_wirausaha');
        $info->join('Kuesioner_lainnya', 'Kuesioner_bekerja.id_bekerja = Kuesioner_lainnya.id_bekerja');
        $join_query = $info->get();
        return $join_query;
    }
}

/* getSimpanan1:
/*

select * 
from bmw
inner join toyota
on bmw . toyotaAVANZA = toyota . toyotaAVANZA  
(mesin avansa di pakai di toyota dan di bmw)

inner join suzuki
on bmw . suzukiAPV = suzuki . suzukiAPV 
(mesin APV di pakai di suzuki dan di bmw)

inner join lamborghini
on toyota . toyotaAVANZA = lamborghini . toyotaAVANZA
(mesin avansa di pakai di toyota dan di lamborghini)

kesimpulannya :
bmw memakai mesin avansa dan apv
toyota memakai mesin avansa
suzuki memakai mesin APV
lamborghini memakai mesin avansa dan lamborghini juga

*  SELECT * FROM Kuesioner_wirausaha
*  JOIN Kuesioner_bekerja   ON   Kuesioner_wirausaha . idKuesioner_wirausaha     = Kuesioner_bekerja.idKuesioner_wirausaha
*  JOIN Kuesioner_wirausaha ON   Kuesioner_wirausaha. idKuesioner_wirausaha   = Kuesioner_wirausaha.idKuesioner_wirausaha
*  JOIN Kuesioner_lainnya   ON   Kuesioner_wirausaha . idKuesioner_lainnya     = Kuesioner_lainnya . idKuesioner_lainnya
*/
