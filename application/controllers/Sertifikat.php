<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        if(!$this->session->userdata('id_user')){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("auth"));
        }
    }

    public function index(){
        $id = $this->session->userdata("id_user");
        // echo $id;
        $data['title'] = "List Sertifikat";
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        
        $sertifikat = $this->Admin_model->get_all("kelas_user", ["sertifikat" => 1, "nilai <>" => "", "hapus" => 0]);
        $data['sertifikat'] = [];
        
        foreach ($sertifikat as $i => $sertifikat) {
            $data['sertifikat'][$i] = $sertifikat;

            $kelas = $this->Admin_model->get_one("kelas", ["id_kelas" => $sertifikat['id_kelas']]);
            $data['sertifikat'][$i]['kelas'] = $kelas;
            
            $civitas = $this->Admin_model->get_one("civitas", ["id_civitas" => $kelas['id_civitas']]);
            $data['sertifikat'][$i]['civitas'] = $civitas;
        }
        // var_dump($kelas);

        $this->load->view("templates/header-user", $data);
        $this->load->view("pages/sertifikat/index", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function peserta($id){
        
        $kelas = $this->Admin_model->get_one("kelas_user", ["MD5(id)" => $id, "hapus" => 0]);
        $id = $kelas['id_user'];

        $data['peserta'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $kelas['id_kelas']]);
        
        $program = $this->Admin_model->get_one("program", ["program" => $kelas['program']]);
        $data['kelas']['program_arab'] = $program['program_arab'];
        
        $data['nilai'] = $kelas['nilai'];
        
        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [214, 330], 'orientation' => 'L', 'margin_left' => '0', 'margin_right' => '0', 'margin_top' => '0', 'margin_bottom' => '0', 'fontDir' => array_merge($fontDirs, [__DIR__ . '/assets/font',]),
        'fontdata' => $fontData + [
            'arab' => [
                // 'R' => 'tradbdo.ttf',
                'R' => 'trado.ttf',
                'useOTL' => 0xFF,
                'useKashida' => 75,
            ],
            'arial' => [
                // 'R' => 'tradbdo.ttf',
                'R' => 'arial.ttf',
                'useOTL' => 0xFF,
                'useKashida' => 75,
            ]
        ], 
        ]);
        
        $mpdf->text_input_as_HTML = true; //(default = false)
        $print = $this->load->view('pages/sertifikat/sertifikat', $data, TRUE);
        $mpdf->WriteHTML($print);
        // $mpdf->Output();
        $mpdf->Output($data['kelas']['nama_kelas']."_".$data['peserta']['nama'].".pdf", 'I');
    }
}

/* End of file Sertifikat.php */
