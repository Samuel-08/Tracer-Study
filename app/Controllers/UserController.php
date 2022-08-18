<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function profile()
    {
        #function atau method untuk

        $data = [];
        $model = new UserModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('profile', $data);
    }
    public function register()
    {
        #function atau method untuk
        $data = [];

        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'nama' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbl_users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {

                return view('register', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new UserModel();

                $newData = [
                    'nama' => $this->request->getVar('nama'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'no_hp' => $this->request->getVar('no_hp'),
                    'status' => $this->request->getVar('status'),
                    'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                    'nim' => $this->request->getVar('nim'),
                    'jurusan' => $this->request->getVar('jurusan'),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                    'tahun_lulus' => $this->request->getVar('tahun_lulus'),
                    'kota_kelahiran' => $this->request->getVar('kota_kelahiran'),
                    'agama' => $this->request->getVar('agama'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Berhasil Registrasi');
                return redirect()->to(base_url('login'));
            }
        }
        return view('register');
    }
    public function login()
    {
        #function atau method untuk
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email atau Password tidak sama",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                // Stroing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                if ($user['role'] == "admin") {

                    return redirect()->to(base_url('admin'));
                } elseif ($user['role'] == "user") {

                    return redirect()->to(base_url('user'));
                }
            }
        }
        return view('login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role" => $user['role'],
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        #function atau method untuk
        session()->destroy();
        return redirect()->to('/');
    }
}
