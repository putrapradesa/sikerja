<?php

namespace App\Controllers;
use \App\Models\BonModel;
use App\Controllers\BaseController;
// use App\Database\Migrations\DetailBon;
use App\Models\DetailBonModel;
use Dompdf\Dompdf ;

class BonController extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if($this->session->get('role') != 'Admin'){
            return redirect()->to('/boncontroller/user');
        }

        helper(['my_helper']);
        register_ci_instance($this);
        $data = [];
        $data['modal_delegasi'] = view('bon/modal/delegation');
        $data['modal_input'] = view('bon/modal/add');
        $data['modal_pengerjaan'] = view('bon/modal/resolve');
        return view('bon/home', $data);
    }

    public function tampil($filter)
    {
        $session = session();

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        helper(['dateformat_helper']);
        $bon = new BonModel();
        $data = [];
        $data['menu'] = 'Bon';
        $data['icon'] = '<i class="fas fa-book"></i>';
        $data['submenu'] = '';
        $data['ses_level'] = $session->get('role');
        if($filter == "masuk") {
            $where1 = "status='masuk'";
            $data['bon'] = $bon->Where($where1)->findAll();
            $data['submenu'] = 'Terima';
            $data['judul'] = 'Terima Bon';
        }else if($filter == "ongoing") {
            $where2 = "status='delegasi'";
            $data['bon'] = $bon->Where($where2)->findAll();
            $data['submenu'] = 'Ongoing';
            $data['judul']  = 'Selesaikan Bon';
        }else if($filter == "selesai"){
            $where3 = "status='selesai' OR status='gagal'";
            $data['bon'] = $bon->Where($where3)->findAll();
            $data['menu'] = 'Bon Selesai';
            $data['judul'] = 'Daftar Bon Selesai';
        }else
        {
            $where4 = "status='terima'";
            $data['bon'] = $bon->Where($where4)->findAll();
            $data['submenu'] = 'Delegasi';
            $data['judul']  = 'Delegasikan Bon';
        }
        // $bon
        // $data = [];
        // $data['modal_delegasi'] = view('bon/modal/delegation');
        $data['modal_input'] = view('bon/modal/add');
        // $data['modal_pengerjaan'] = view('bon/modal/resolve');
        return view('bon/home', $data);
    }

    public function getbyId()
    {
        $session = session();

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $bon = new BonModel();
        $id = trim($_POST['id']);

        // echo $id;

        $where = 'Id = '.$id.'';

        $data['bonbyid'] = $bon->where($where)->first();
        // // var_dump($data);
        $datamodal = view('bon/modal/delegation', $data);

        echo $datamodal;
    }

    public function getbyIdPerbaikan()
    {
        $session = session();

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $bon = new BonModel();
        $id = trim($_POST['id']);

        // echo $id;

        $where = 'Id = '.$id.'';

        $data['bonbyid'] = $bon->where($where)->first();
        // // var_dump($data);
        $datamodal = view('bon/modal/resolve', $data);

        echo $datamodal;
    }

    public function getdetail()
    {
        $session = session();

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $bon = new BonModel();
        $detailbon = new DetailBonModel();
        $id = trim($_POST['id']);

        // echo $id;

        $where = 'Id = '.$id.'';
        $wheredetail = 'BonId = '.$id.'';

        $data['bonbyid'] = $bon->where($where)->first();
        $data['detailbon'] = $detailbon->where($wheredetail)->find();
        // // var_dump($data);
        $datamodal = view('bon/modal/detail', $data);

        echo $datamodal;
    }

    public function update($filter)
    {
        $session = session();

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        if($filter == "terima"){
            $bon = new BonModel();
            $id = trim($_POST['id']);

            $update = $bon->update($id, ['Status' => 'terima']);

            if ($update) {
                echo "success";
            } else {
                echo "error";
            }
        } else if ($filter == "delegasi")
        {
            if($this->request->getMethod() == "post"){
                $delegasi = $this->request->getVar("delegasiorang");
                $id = $this->request->getVar("id");

                // echo $delegasi;

                $bon = new BonModel();

                $data = [
                    'PenerimaTugas' => $delegasi,
                    'Status' => 'delegasi'
                ];

                $update = $bon->update($id, $data);

                if ($update) {
                    echo "success";
                } else {
                    echo "error";
                }

            }
        } else if ($filter == 'pengerjaan')
        {
            if($this->request->getMethod() == "post"){
                $komponen = $this->request->getVar("nama_komponen");
                $qty = $this->request->getVar("Qty");
                $id = $this->request->getVar("id");
                $descript = $this->request->getVar("descriptionresolve");
                $status = $this->request->getVar("status");

                $input = array();
                $index = 0;
                // $statusinsert = 0;
                if($komponen[0] != '' ){
                    foreach($komponen as $row){

                        array_push($input, array(
                            'CreatedBy'  => 'admin',
                            'IsDeleted'      => strtoupper($row),
                            'BonId'        => $id,
                            'Alat&Bahan'      => $row,
                            'Jumlah'  => $qty[$index],
                            'IsDeleted' => 0,
                        ));
                        $index++;
                    }
                    
                    $detailbon = new DetailBonModel();
                    $insert = $detailbon->insertBatch($input);
                    // if($insert){
                    //     $statusinsert = 1;
                    // }else {
                    //     $statusinsert = 0;
                    // }
                }
                $bon = new BonModel();
                $data = [
                    'Status' => $status,
                    'Keterangan' => $descript,
                    'TanggalSelesai' => date("Y-m-d H:i:s")
                ];

                $update = $bon->update($id, $data);

                if ($update) {
                    echo "success";
                } else {
                    echo "error";
                }
            }
        } else
        {
            $bon = new BonModel();
            $id = trim($_POST['id']);

            $update = $bon->update($id, ['Status' => 'tolak']);

            if ($update) {
                echo "success";
            } else {
                echo "error";
            }
        }

    }

    public function add()
    {
        $session = session();

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        $data =
        [
            'CreatedBy' => $session->get('username'),
            'IsDeleted' => 0,
            'NamaPemesan'   => $this->request->getVar("pemesan"),
            'TanggalPemesan'   => $this->request->getVar("tanggal"),
            'Request'   => $this->request->getVar("request"),
            'Status'   => 'masuk',
            'NamaBagian'   => $this->request->getVar("bagian"),
            'BagianPenerima'   => $this->request->getVar("tugas"),

        ];

        $account = new BonModel();

        $insert = $account->insert($data);

        if($insert){
            echo 'success';
        }else{
            echo 'error';
        }
    }

    public function user()
    {
        $session = session();

        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        // $data['bon'] = $bon->Where('CreatedBy',$session->get('username'))->findAll();
        $session = session();
        helper(['dateformat_helper']);
        register_ci_instance($this);
        $data = [];
        $data['menu'] = 'Bon';
        $data['submenu'] = '';
        $data['icon'] = '<i class="fas fa-book"></i>';
        $data['bagian'] = $session->get('username');
        $data['ses_level'] = $session->get('role');
        // var_dump($where1);
        $bon = new BonModel();
        $data['bon'] = $bon->where('CreatedBy', $session->get('username'))->findAll();
        
        // $data['modal_delegasi'] = view('bon/modal/delegation');
        $data['modal_input'] = view('bonusers/modal/add');
        // $data['modal_pengerjaan'] = view('bon/modal/resolve');
        return view('bonusers/home', $data);
    }

    public function getdetailuser()
    {
        $bon = new BonModel();
        $detailbon = new DetailBonModel();
        $id = trim($_POST['id']);

        // echo $id;

        $where = 'Id = '.$id.'';
        $wheredetail = 'BonId = '.$id.'';

        $data['bonbyid'] = $bon->where($where)->first();
        $data['detailbon'] = $detailbon->where($wheredetail)->find();
        // // var_dump($data);
        $datamodal = view('bonusers/modal/detail', $data);

        echo $datamodal;
    }

    // public function generatePDF()
    // {
    //     $data = array(
    //         "dataku" => array(
    //             "nama" => "Petani Kode",
    //             "url" => "http://petanikode.com"
    //         )
    //     );
    //     $filename = date('y-m-d').' Bon Tugas Kerja';

    //     // instantiate and use the dompdf class
    //     $dompdf = new Dompdf();

    //     // load HTML content
    //     $dompdf->loadHtml(view('bon/pdf/laporan_pdf',$data));

    //     // (optional) setup the paper size and orientation
    //     $dompdf->setPaper('A5', 'landscape');

    //     // render html as PDF
    //     $dompdf->render();

    //     // output the generated pdf
    //     $dompdf->stream($filename);
    // }
}
