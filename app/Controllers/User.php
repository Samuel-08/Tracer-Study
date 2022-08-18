<?php

namespace App\Controllers;

use App\Models\Hasil;
use App\Models\Radio;
use App\Models\UserModel;
use App\Models\KuisBelajarModel;
use App\Controllers\BaseController;
use App\Models\Kategori;

class User extends BaseController
{
    public function __construct()
    {
        #function atau method untuk validasi jika bukan user
        if (session()->get('role') != "user") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        #function atau method untuk memberi data halaman index user
        $bio = new UserModel(); 
         $lain = $bio->get()->getResultArray();
        $data = [
    'title' => 'Tracer Study Universitas Mulia',
            'bio' => $bio,
            'idf' => $lain,
         ];
// dd($data);
        return view("user/dashboard", $data);
    }
    public function index2()
    {
        #function atau method untuk memberi data halaman index user
        $bio = new UserModel();
        $data = [
            'tittle' => 'Anda Berhasil Mengisi Kuesioner',
            'bio' => $bio,
        ];

        return view("user/selesai", $data);
    }
    public function tampilPertanyaanBelajar()
    {
        $kuisBelajar = new KuisBelajarModel();
        $data = ['tittle' => 'Ini Adalah kuis', 'kbel' => $kuisBelajar->findAll()];
        return view('user/pertanyaan', $data);
    }

    public function insert()
    {
        #function atau method untuk insert jawaban
        $model = new UserModel();
        $user = $model->where('status', $this->request->getVar('status'))->first();
        if ($user['status'] == 'belajar') {
            return redirect()->to(base_url('user/belajar'));
        } elseif ($user['status'] == 'bekerja') {
            return redirect()->to(base_url('user/bekerja'));
        } elseif ($user['status'] == 'wirausaha') {
            return redirect()->to(base_url('user/wirausaha'));
        } else {
            return redirect()->to(base_url('user/lainnya'));
        }
    }
    /*
 * --------------------------------------------------------------------
 * Route USER        //.............//.............//.............//.............    
 * --------------------------------------------------------------------
 */
public function indexx() {return view('user/incded');}

    public function input_k_belajar()
    { #function atau method untuk mengakses file belajar.php di folder user


        $this->quiz = new KuisBelajarModel();
         $builder = new Radio();
         $kategori = new Kategori();
$user = new UserModel();
        $data = [
            'user' => $user->where('id', session()->get('id'))->first(),
            'nama' => $user->where('nama', session()->get('nama'))->first(), 
            'status' => $user->where('status', session()->get('status'))->first(), 
            'tanya' => $this->quiz->get()->getResultArray(),
            'ss' => $builder->get()->getResultArray(),
            'kategori' => $kategori->get()->getResultArray(),

        ];
        if (session()->get('status') == "Belajar") {
           return view ('user/incded');
        echo session()->get('status');
        }   
        return view('user/belajar', $data);
   }
    


    public function pertanyaan()
    { // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['id_kuis' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $quiz = new Hasil();
            $quiz->insert(
                [
                    'id_hasil' => $this->request->getPost('id_hasil'),
                    'id_kuis' => $this->request->getPost('id_kuis'),
                    'id_user' => $this->request->getPost('id_user'),
                    'nama' => $this->request->getPost('nama'),
                    'hasil1' => $this->request->getPost('hasil1'),
                    'hasil2' => $this->request->getPost('hasil2'),
                    'hasil3' => $this->request->getPost('hasil3'),
                    'hasil4' => $this->request->getPost('hasil4'),
                    'hasil5' => $this->request->getPost('hasil5'),
                    'hasil6' => $this->request->getPost('hasil6'),
                    'hasil7' => $this->request->getPost('hasil7'),
                    'hasil8' => $this->request->getPost('hasil8'),
                    'hasil9' => $this->request->getPost('hasil9'),
                    'hasil10' => $this->request->getPost('hasil10'),
                    'hasil11' => $this->request->getPost('hasil11'),
                    'hasil12' => $this->request->getPost('hasil12'),
                    'hasil13' => $this->request->getPost('hasil13'),
                    'hasil14' => $this->request->getPost('hasil14'),
                    'hasil15' => $this->request->getPost('hasil15'),

                ]
            );
        }

        // tampilkan form create
        // echo view('admin_create_news');
        return redirect()->to(base_url('/indeks'))->with('sukses', 'Pertanyaan Berhasil di isi');
    }

    // 
    /*
 * --------------------------------------------------------------------
 * Route USER        //.............//.............//.............//.............    
 * --------------------------------------------------------------------
 */
}
