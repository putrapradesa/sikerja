<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class AccountController extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $session = session();
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        

        $data = [];
        $data['menu'] = 'Akun';
        $data['submenu'] = '';
        $data['icon'] = '<i class="fas fa-solid fa-user-plus"></i>';
        $data['ses_level'] = $session->get('role');
        $data['modal_input'] = view('akun/modal/add');
        $account = new AccountModel();
        $where1 = "IsDelete=0";
        $data['account'] = $account->Where($where1)->findAll();
        // $data['account'] = $account->get()->getResultArray();
        return view('akun/home', $data);
    }

    public function login()
    {
        return view('login');
    }

    public function add()
    {
        $nama = $this->request->getVar("InputNama");
        $useername = $this->request->getVar("InputUsername");
        $password = $this->request->getVar("inputpassword");
        $role = $this->request->getVar("role");

        $data = [
            'Nama' => $nama,
            'Username'  => $useername,
            'Password'  => sha1($password),
            'Role'  => $role,
            'IsDelete' => 0
        ];

        $account = new AccountModel();

        $insert = $account->insert($data);

        if($insert){
            echo 'success';
        }else{
            echo 'error';
        }
    }

    public function getById() 
    {
        $session = session();
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        // var_dump($this->session->get('role'));

        $bon = new AccountModel();
        $id = trim($_POST['id']);

        // echo $id;

        $where = 'Id = '.$id.'';

        $data['account'] = $bon->where($where)->first();
        // // var_dump($data);
        $datamodal = view('akun/modal/edit', $data);

        echo $datamodal;
    }

    public function edit()
    {
        $session = session();
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $id = $this->request->getVar("id");

        $nama = $this->request->getVar("InputNama");
        $useername = $this->request->getVar("InputUsername");
        $password = $this->request->getVar("inputpassword");
        $role = $this->request->getVar("role");

        if($password == ""){
            $data = [
                'Nama' => $nama,
                'Username'  => $useername,
                'Role'  => $role,
                'IsDelete' => 0
            ];
        }else{
            $data = [
                'Nama' => $nama,
                'Username'  => $useername,
                'Password'  => sha1($password),
                'Role'  => $role,
                'IsDelete' => 0
            ];
        }

        $account = new AccountModel();

        $insert = $account->update($id, $data);

        if($insert){
            echo 'success';
        }else{
            echo 'error';
        }
    }

    public function delete()
    {
        $session = session();
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $id = $this->request->getVar("id");

        $data = [
            'IsDelete' => 1
        ];

        $account = new AccountModel();

        $insert = $account->update($id, $data);

        if($insert){
            echo 'success';
        }else{
            echo 'error';
        }
    }
}
