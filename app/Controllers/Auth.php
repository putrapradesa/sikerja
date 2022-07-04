<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new AccountModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    public function login()
    {
        //menampilkan halaman login
        return view('login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();
        
        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('Username', $data['username'])->first();
        
        //cek apakah username ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user['Password'] != sha1($data['password']))
            {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('auth/login');
            }
            else{
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['Username'],
                    'name'  => $user['Nama'],
                    'role' => $user['Role']
                    ];

                $this->session->set($sessLogin);
                return redirect()->to('/');
            }
        }
        else{
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('auth/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('auth/login');
    }
}
