<?php

namespace App\Controllers\Admin;

use \App\Models\BonModel;
use App\Controllers\BaseController;

class DashboardController extends BaseController
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
        // var_dump($this->session->get('role'));
        
        //cek role dari session
        if($this->session->get('role') != 'Admin'){
            return redirect()->to('admin/dashboardcontroller/user');
        }

        $bon = new BonModel(); 
        $data = [];
        $data['menu'] = 'Dashboard';
        $data['submenu'] = '';
        $data['icon'] = '<i class="fas fa-home"></i>';
        $data['ses_level'] = $session->get('role');
        $where1 = "status='masuk'";
        $where4 = "status='terima'";
        $where2 = "status='delegasi'";
        $where3 = "status='selesai' OR status='gagal'";
        $data['bonmasuk'] = $bon->where($where1)->countAllResults();
        $data['bonterima'] = $bon->where($where4)->countAllResults();
        $data['bonjalan'] = $bon->where($where2)->countAllResults();
        $data['selesai'] = $bon->where($where3)->countAllResults();
        // var_dump($data);
        return view('admin/dashboard/index', $data);
    }

    public function user()
    {
        // $bon = new BonModel(); 
        $session = session();
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        // var_dump($this->session->get('role'));

        
        $data = [];
        $data['menu'] = 'Dashboard';
        $data['submenu'] = '';
        $data['icon'] = '<i class="fas fa-home"></i>';
        $data['ses_level'] = $session->get('role');
        // $where1 = "status='masuk'";
        // $where4 = "status='terima'";
        // $where2 = "status='delegasi'";
        // $where3 = "status='selesai' OR status='gagal'";
        // $data['bonmasuk'] = $bon->where($where1)->countAllResults();
        // $data['bonterima'] = $bon->where($where4)->countAllResults();
        // $data['bonjalan'] = $bon->where($where2)->countAllResults();
        // $data['selesai'] = $bon->where($where3)->countAllResults();
        // var_dump($data);
        return view('admin/dashboard/indexuser', $data);
    }
}
