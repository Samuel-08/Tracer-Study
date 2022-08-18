<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisBekerjaModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Kuesioner_bekerja'; 
    protected $primaryKey = 'id_kuis_bekerja';
    protected $protectFields = true;
    protected $allowedFields = [
        'id_kuis_bekerja', 'pertanyaan', 
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
            return $this->where(['id_kuis_bekerja' => $id])->first();
        }
    }
    public function editKuis($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_kuis_bekerja', $id);
        return $builder->update($data);
    }

    public function getSimpanan1()
    {
        $info =  $this->db->table('Kuesioner_bekerja');

        $info->select('*');
        // $info->select('Kuesioner_bekerja.*');
        // $info->select('Kuesioner_bekerja.*');
        // $info->select('Kuesioner_wirausaha.*');
        // $info->select('Kuesioner_lainnya.*');
        $info->from('Kuesioner_bekerja');
        $info->join('Kuesioner_bekerja', 'Kuesioner_bekerja.id_bekerja = Kuesioner_bekerja.id_bekerja');
        $info->join('Kuesioner_wirausaha', 'Kuesioner_bekerja.id_wirausaha = Kuesioner_wirausaha.id_wirausaha');
        $info->join('Kuesioner_lainnya', 'Kuesioner_bekerja.id_bekerja = Kuesioner_lainnya.id_bekerja');
        $join_query = $info->get();
        return $join_query;
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

*  SELECT * FROM Kuesioner_bekerja
*  JOIN Kuesioner_bekerja   ON   Kuesioner_bekerja . idKuesioner_bekerja     = Kuesioner_bekerja.idKuesioner_bekerja
*  JOIN Kuesioner_wirausaha ON   Kuesioner_bekerja. idKuesioner_wirausaha   = Kuesioner_wirausaha.idKuesioner_wirausaha
*  JOIN Kuesioner_lainnya   ON   Kuesioner_bekerja . idKuesioner_lainnya     = Kuesioner_lainnya . idKuesioner_lainnya
*/
}
