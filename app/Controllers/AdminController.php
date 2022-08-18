<?php

namespace App\Controllers;

use App\Models\Hasil;
use App\Models\KuisWirausahaModel;
use App\Models\UserModel;
use App\Models\KuisBekerjaModel;
use App\Models\KuisBelajarModel;
use App\Models\KuisLainnyaModel;  
use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function __construct()
    {#function atau method untuk akese admin
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {#function atau method untuk menampilkan jumlah user kategori wirausaha
        $infos = new UserModel();
        $infos->select('*'); 
        $infos->like('status', 'Wirausaha');
        $WIRAUSAHA = $infos->countAllResults('tbl_users');

#function atau method untuk menampilkan jumlah user kategori LAINNYA
        $in = new UserModel();
        $in->select('*'); 
        $in->like('status', 'Lain');
        $LAIN = $in->countAllResults('tbl_users');

#function atau method untuk menampilkan jumlah user kategori belajar
        $info = new UserModel();
        $info->select('*'); 
        $info->like('status', 'Belajar');
        $BELAJAR = $info->countAllResults('tbl_users');

        #function atau method untuk menampilkan jumlah user kategori  bekerja
        $ii = new UserModel();
        $ii->select('*'); 
        $ii->like('status', 'Bekerja');
        $BEKERJA = $ii->countAllResults('tbl_users'); 
        $data = [
            'tittle' => 'Dashboard Admin',
            'BELAJAR' => $BELAJAR,
            'BEKERJA' => $BEKERJA,
            'LAIN' => $LAIN,
            'WIRAUSAHA' => $WIRAUSAHA
        ]; 
        return view("/admin/dashboard", $data);
    }

  public function user_Belajar()
  {#function atau method untuk masuk kedalam user yang berstatus belajar
        $in = new UserModel();
        $in->select('*');
        $in->like('status', 'Belajar');
        $bb = $in->get()->getResultArray(); 
        $data = [
            'tittle' => 'Daftar User Yang Melanjutkan Studi', 
            'bb' => $bb
        ];
          return view("admin/f_belajar/index", $data);
 
  }
  
  public function user_Bekerja()
  {#function atau method untuk masuk kedalam user yang berstatus belajar
        $inf = new UserModel();
        $inf->select('*');
        $inf->like('status', 'Bekerja');
        $Vbekerja = $inf->get()->getResultArray(); 
        $data = [
            'tittle' => 'Daftar User Yang Sedang Bekerja', 
            'bekerja' => $Vbekerja
        ];
          return view("admin/f_bekerja/index", $data);
  }
  
  public function user_kategori_lain()
  {#function atau method untuk masuk kedalam user yang berstatus belajar
        $inf = new UserModel();
        $inf->select('*');
        $inf->like('status', 'Lainnya');
        $lain = $inf->get()->getResultArray(); 
        $data = [
            'tittle' => 'Daftar User Diluar Kategori', 
            'lain' => $lain
        ];
          return view("admin/f_Kategori_lain/index", $data);  }
          
          public function user_wirausaha()
          {#function atau method untuk masuk kedalam user yang berstatus belajar
                $info = new UserModel();
                $info->select('*');
                $info->like('status', 'Wirausaha');
                $wirausaha = $info->get()->getResultArray(); 
                $data = [
                    'tittle' => 'Daftar User Yang Berwirausaha', 
                    'wirausaha' => $wirausaha
                ];
                  return view("admin/f_wirausaha/index", $data);  }
          
          public function ListSemua()
          {#function atau method untuk menampilkan semua user
              $info = new UserModel();   
              $data = [
                  'tittle' => 'halaman Admin',
                  'des' => $info->findAll(15, 1),
              ];
              return view("/admin/list", $data);
          } 


          public function HasilKuesioner()
          {
        $hasil = new Hasil(); 
 $kuis = new KuisBelajarModel();
       
        $data = [
            // rowdata
            // numRows
            // currentRow
 
          'h1_sangat_baik' => $hasil->select('hasil1')->where('hasil1', 'sangat baik')->get()->getNumRows(),
            'h1_baik' => $hasil->select('hasil1')->where('hasil1', 'baik')->get()->getNumRows(),
            'h1_cukup' => $hasil->select('hasil1')->where('hasil1', 'cukup')->get()->getNumRows(),
            'h1_kurang' => $hasil->select('hasil1')->where('hasil1', 'kurang')->get()->getNumRows(),
            
            'h2_sangat_baik' => $hasil->select('hasil2')->where('hasil2', 'sangat baik')->get()->getNumRows(),
              'h2_baik' => $hasil->select('hasil2')->where('hasil2', 'baik')->get()->getNumRows(),
              'h2_cukup' => $hasil->select('hasil2')->where('hasil2', 'cukup')->get()->getNumRows(),
              'h2_kurang' => $hasil->select('hasil2')->where('hasil2', 'kurang')->get()->getNumRows(),
              
              'h3_sangat_baik' => $hasil->select('hasil3')->where('hasil3', 'sangat baik')->get()->getNumRows(),
                'h3_baik' => $hasil->select('hasil3')->where('hasil3', 'baik')->get()->getNumRows(),
                'h3_cukup' => $hasil->select('hasil3')->where('hasil3', 'cukup')->get()->getNumRows(),
                'h3_kurang' => $hasil->select('hasil3')->where('hasil3', 'kurang')->get()->getNumRows(),
                
                'h4_sangat_baik' => $hasil->select('hasil4')->where('hasil4', 'sangat baik')->get()->getNumRows(),
                  'h4_baik' => $hasil->select('hasil4')->where('hasil4', 'baik')->get()->getNumRows(),
                  'h4_cukup' => $hasil->select('hasil4')->where('hasil4', 'cukup')->get()->getNumRows(),
                  'h4_kurang' => $hasil->select('hasil4')->where('hasil4', 'kurang')->get()->getNumRows(),
                  
                  'h5_sangat_baik' => $hasil->select('hasil5')->where('hasil5', 'sangat baik')->get()->getNumRows(),
                    'h5_baik' => $hasil->select('hasil5')->where('hasil5', 'baik')->get()->getNumRows(),
                    'h5_cukup' => $hasil->select('hasil5')->where('hasil5', 'cukup')->get()->getNumRows(),
                    'h5_kurang' => $hasil->select('hasil5')->where('hasil5', 'kurang')->get()->getNumRows(),
                    // asdfffffffffffffffffffffffffffffffffffffffffffffffffff
                    'h6_sangat_baik' => $hasil->select('hasil6')->where('hasil6', 'sangat baik')->get()->getNumRows(),
                      'h6_baik' => $hasil->select('hasil6')->where('hasil6', 'baik')->get()->getNumRows(),
                      'h6_cukup' => $hasil->select('hasil6')->where('hasil6', 'cukup')->get()->getNumRows(),
                      'h6_kurang' => $hasil->select('hasil6')->where('hasil6', 'kurang')->get()->getNumRows(),
                      
                      'h7_sangat_baik' => $hasil->select('hasil7')->where('hasil7', 'sangat baik')->get()->getNumRows(),
                        'h7_baik' => $hasil->select('hasil7')->where('hasil7', 'baik')->get()->getNumRows(),
                        'h7_cukup' => $hasil->select('hasil7')->where('hasil7', 'cukup')->get()->getNumRows(),
                        'h7_kurang' => $hasil->select('hasil7')->where('hasil7', 'kurang')->get()->getNumRows(),
                        
                        'h8_sangat_baik' => $hasil->select('hasil8')->where('hasil8', 'sangat baik')->get()->getNumRows(),
                          'h8_baik' => $hasil->select('hasil8')->where('hasil8', 'baik')->get()->getNumRows(),
                          'h8_cukup' => $hasil->select('hasil8')->where('hasil8', 'cukup')->get()->getNumRows(),
                          'h8_kurang' => $hasil->select('hasil8')->where('hasil8', 'kurang')->get()->getNumRows(),
                          
                          'h9_sangat_baik' => $hasil->select('hasil9')->where('hasil9', 'sangat baik')->get()->getNumRows(),
                            'h9_baik' => $hasil->select('hasil9')->where('hasil9', 'baik')->get()->getNumRows(),
                            'h9_cukup' => $hasil->select('hasil9')->where('hasil9', 'cukup')->get()->getNumRows(),
                            'h9_kurang' => $hasil->select('hasil9')->where('hasil9', 'kurang')->get()->getNumRows(),
                            
                            'h10_sangat_baik' => $hasil->select('hasil10')->where('hasil10', 'sangat baik')->get()->getNumRows(),
                              'h10_baik' => $hasil->select('hasil10')->where('hasil10', 'baik')->get()->getNumRows(),
                              'h10_cukup' => $hasil->select('hasil10')->where('hasil10', 'cukup')->get()->getNumRows(),
                              'h10_kurang' => $hasil->select('hasil10')->where('hasil10', 'kurang')->get()->getNumRows(),
                              
                              'h11_sangat_baik' => $hasil->select('hasil11')->where('hasil11', 'sangat baik')->get()->getNumRows(),
                                'h11_baik' => $hasil->select('hasil11')->where('hasil11', 'baik')->get()->getNumRows(),
                                'h11_cukup' => $hasil->select('hasil11')->where('hasil11', 'cukup')->get()->getNumRows(),
                                'h11_kurang' => $hasil->select('hasil11')->where('hasil11', 'kurang')->get()->getNumRows(),
                                
                                'h12_sangat_baik' => $hasil->select('hasil12')->where('hasil12', 'sangat baik')->get()->getNumRows(),
                                  'h12_baik' => $hasil->select('hasil12')->where('hasil12', 'baik')->get()->getNumRows(),
                                  'h12_cukup' => $hasil->select('hasil12')->where('hasil12', 'cukup')->get()->getNumRows(),
                                  'h12_kurang' => $hasil->select('hasil12')->where('hasil12', 'kurang')->get()->getNumRows(),
                                  
                                  'h13_sangat_baik' => $hasil->select('hasil13')->where('hasil13', 'sangat baik')->get()->getNumRows(),
                                    'h13_baik' => $hasil->select('hasil13')->where('hasil13', 'baik')->get()->getNumRows(),
                                    'h13_cukup' => $hasil->select('hasil13')->where('hasil13', 'cukup')->get()->getNumRows(),
                                    'h13_kurang' => $hasil->select('hasil13')->where('hasil13', 'kurang')->get()->getNumRows(),
                                    
                                    'h14_sangat_baik' => $hasil->select('hasil14')->where('hasil14', 'sangat baik')->get()->getNumRows(),
                                      'h14_baik' => $hasil->select('hasil14')->where('hasil14', 'baik')->get()->getNumRows(),
                                      'h14_cukup' => $hasil->select('hasil14')->where('hasil14', 'cukup')->get()->getNumRows(),
                                      'h14_kurang' => $hasil->select('hasil14')->where('hasil14', 'kurang')->get()->getNumRows(),
                                      
                                      'h15_sangat_baik' => $hasil->select('hasil15')->where('hasil15', 'sangat baik')->get()->getNumRows(),
                                        'h15_baik' => $hasil->select('hasil15')->where('hasil15', 'baik')->get()->getNumRows(),
                                        'h15_cukup' => $hasil->select('hasil15')->where('hasil15', 'cukup')->get()->getNumRows(),
                                        'h15_kurang' => $hasil->select('hasil15')->where('hasil15', 'kurang')->get()->getNumRows(),



          'kuis' => $kuis->get()->getResultArray('pertanyaaa'), 
        ];
        // dd($data);
            return view("/admin/ending",$data);
          }
    // *====================================== Kategori belajar  =========================================* //


    public function createBelajar()
    {#function atau method untuk membuat pertanyaan baru
        $model = new KuisBelajarModel(); 
        $newData = [
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'Berhasil Menambahkan Pertanyaan');

        return redirect()->to(base_url('/admin /inputKuis'));
    }

    public function ListBelajar()
    {#function atau method untuk menampilkan semua list pertanyaan
        $info = new KuisBelajarModel();
        $data = [
            'tittle' => 'Halaman Input Kuesioner',
            'ss' => $info->findAll(),
        ];
        return view("/admin/kuisbelajar", $data);
    }

    public function update($id)
    {#function atau method untuk mengupdate data pertanyaan kategori belajar
        $model = new KuisBelajarModel;
        $id = $this->request->getPost('id_kuis_belajar');
        $data = array(
            'pertanyaan' => $this->request->getPost('pertanyaan'),

        );
        $model->editBarang($data, $id);
        echo '<script>
                alert("Sukses Edit Pertanyaan");
                window.location="' . base_url('admin /inputKuis') . '"
            </script>';
    }

    public function edit($id)
    { #function atau method untuk masuk kedalam halaman edit serta 
# mengedit data kategori Belajar halaman berdasarkan Id

        $info = new KuisBelajarModel();
        $data = [
            'detail' => 'Ubah Pertanyaan',
            'up' => $info->getUbah($id),
        ];
        return view('admin/editing', $data);
    }



    public function delete($id)
    {#function atau method untuk menghapus data pertanyaan kategori
        $ss = new KuisBelajarModel();
        $ss->delete($id);

        return redirect()->to('/admin /inputKuis')->with('sukses', 'berhasil di hapus');
    }


    public function belajar()
    {#function atau method untuk masuk kedalam file/halaman Kuis belajar
        return view("/admin/kuisbelajar");
    }


    // *====================================== belajar  =========================================* //



    // *====================================== bekerja  =========================================* // 
    public function CreateBekerja()
    {#function atau method untuk membuat pertanyaan baru
        $model = new KuisBekerjaModel();

        $newData = [
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'Berhasil Menambahkan Pertanyaan');

        return redirect()->to(base_url('/admin/LBekerja'));
    }


    public function ListBekerja()
    {#function atau method untuk menampilkan semua list pertanyaan
        $info = new KuisBekerjaModel();
        $data = [
            'tittle' => 'Halaman Input Kuesioner',
            'ss' => $info->findAll(),
        ];
        return view("/admin/kuisbekerja", $data);
    }
    public function editBekerja($id)
    { #function atau method untuk masuk kedalam halaman edit serta 
# mengedit data kategori Belajar halaman berdasarkan Id

        $info = new KuisBekerjaModel();
        $data = [
            'detail' => 'Ubah Pertanyaan',
            'up' => $info->getUbah($id),
        ];
        return view('admin/editingBekerja', $data);
    }
    public function updateBekerja($id)
    {#function atau method untuk mengupdate data pertanyaan kategori belajar
        $model = new KuisBekerjaModel();
        $id = $this->request->getPost('id_kuis_bekerja');
        $data = array(
            'pertanyaan' => $this->request->getPost('pertanyaan'),   );
        $model->editKuis($data, $id);
        echo '<script>
                alert("Sukses Edit Pertanyaan");
                window.location="' . base_url('/admin/LBekerja') . '"
            </script>';
    }
    public function HapusList($id)
    {#function atau method untuk menghapus data pertanyaan kategori
        $ss = new KuisBekerjaModel();
        $ss->delete($id);

        return redirect()->to('/admin/LBekerja')->with('sukses', 'berhasil di hapus');
    }
    // *====================================== wirausaha  =========================================* // 
    public function CreateWirausaha()
    {#function atau method untuk membuat pertanyaan baru
        $model = new KuisWirausahaModel();

        $newData = [
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'Berhasil Menambahkan Pertanyaan');

        return redirect()->to(base_url('/admin/Lwirausaha'));
    }


    public function Listwirausaha()
    {#function atau method untuk menampilkan semua list pertanyaan
        $info = new KuisWirausahaModel();
        $data = [
            'tittle' => 'Halaman Input Kuesioner',
            'ss' => $info->findAll(),
        ];
        return view("/admin/kuiswirausaha", $data);
    }
    public function editwirausaha($id)
    { #function atau method untuk masuk kedalam halaman edit serta 
# mengedit data kategori Belajar halaman berdasarkan Id

        $info = new KuiswirausahaModel();
        $data = [
            'detail' => 'Ubah Pertanyaan',
            'up' => $info->getUbah($id),
        ];
        return view('admin/editingwirausaha', $data);
    }
    public function updatewirausaha($id)
    {#function atau method untuk mengupdate data pertanyaan kategori belajar
        $model = new KuiswirausahaModel();
        $id = $this->request->getPost('id_kuis_wirausaha');
        $data = array(
            'pertanyaan' => $this->request->getPost('pertanyaan'),
        );
        $model->editBarang($data, $id);
        echo '<script>
                alert("Sukses Edit Pertanyaan");
                window.location="' . base_url('/admin/Lwirausaha') . '"
            </script>';
    }
    public function HWirausaha($id)
    {#function atau method untuk menghapus data pertanyaan kategori
        $ss = new KuiswirausahaModel();
        $ss->delete($id);

        return redirect()->to('/admin/Lwirausaha')->with('sukses', 'berhasil di hapus');
    }
    // *====================================== LAINNYA  =========================================* // 
    public function BuatLainnya()
    {#function atau method untuk membuat pertanyaan baru
        $model = new KuisLainnyaModel();

        $newData = [
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'Berhasil Menambahkan Pertanyaan');

        return redirect()->to(base_url('/admin/DaftarLainnya'));
    }


    public function List()
    {#function atau method untuk menampilkan semua list pertanyaan
        $info = new KuislainnyaModel();
        $data = [
            'tittle' => 'Halaman Input Kuesioner',
            'ss' => $info->findAll(),
        ];
        return view("/admin/kuislainnya", $data);
    }
    public function editlainnya($id)
    { #function atau method untuk masuk kedalam halaman edit serta 
# mengedit data kategori Belajar halaman berdasarkan Id

        $info = new KuislainnyaModel();
        $data = [
            'detail' => 'Ubah Pertanyaan',
            'up' => $info->getUbah($id),
        ];
        return view('admin/ubahlainnya', $data);
    }
    public function updatelainnya($id)
    {#function atau method untuk mengupdate data pertanyaan kategori belajar
        $model = new KuislainnyaModel();
        $id = $this->request->getPost('id_kuis_lainnya');
        $data = array(
            'pertanyaan' => $this->request->getPost('pertanyaan'),
        );
        $model->editBarang($data, $id);
        echo '<script>
                alert("Sukses Edit Pertanyaan");
                window.location="' . base_url('/admin/DaftarLainnya') . '"
            </script>';
    }
    public function HapusL($id)
    {#function atau method untuk menghapus data pertanyaan kategori
        $ss = new KuislainnyaModel();
        $ss->delete($id);

        return redirect()->to('/admin/DaftarLainnya')->with('sukses', 'berhasil di hapus');
    }
}
