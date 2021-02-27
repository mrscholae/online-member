<?php 
class Tarkibi2 extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        $this->load->model("Tarkibi2_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if(!$this->session->userdata('id_user')){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("auth"));
        }
    }

    public function tugas($id_kelas){
        
        for ($i=1; $i < 25; $i++) { 
            $list_pertemuan[$i]['id'] = $i;
            $list_pertemuan[$i]['pertemuan'] = "Pertemuan ".$i;
            $list_pertemuan[$i]['md5'] = MD5("Pertemuan ".$i);
        }
        
        $pertemuan = $this->searchForId($_GET['pertemuan'], $list_pertemuan);

        $data['title'] = "Tugas Pertemuan 1";
        $this->load->view("templates/header-user", $data);
        $this->load->view("tarkibi_2/tugas/pertemuan1", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function kelas($id_kelas){
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["MD5(id_kelas)" => $id_kelas]);
        $data['link'] = $id_kelas;
        for ($i=1; $i < 25; $i++) { 
            $list_pertemuan[$i]['id'] = $i;
            $list_pertemuan[$i]['pertemuan'] = "Pertemuan ".$i;
            $list_pertemuan[$i]['md5'] = MD5("Pertemuan ".$i);
        }

        $isian = array("1", "2", "4", "5", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20");
        $pg = array("3", "6");
        $kosong = array("7");

        if(!empty($_GET['pertemuan'])){
            $pertemuan = $this->searchForId($_GET['pertemuan'], $list_pertemuan);
            
            $val = $pertemuan['id']-1;
            $back = $this->Admin_model->get_one("materi_kelas", ["md5(id_kelas)" => $id_kelas, "materi" => "Pertemuan $val"]);
            if($back) {
                $data['back'] = md5($back['materi']);
            } else {
                $data['back'] = "";
            }
            
            $val = $pertemuan['id']+1;
            $next = $this->Admin_model->get_one("materi_kelas", ["md5(id_kelas)" => $id_kelas, "materi" => "Pertemuan $val"]);
            if($next) {
                $data['next'] = md5($next['materi']);
            } else {
                $data['next'] = "";
            }

            $data['title'] = $pertemuan['pertemuan'];
            $data['image'] = $this->Tarkibi2_model->materi_pertemuan($pertemuan['id']);

            // var_dump($pertemuan['id']);
            // exit();
                
            if(in_array($pertemuan['id'], $isian)){
                $latihan = $this->Admin_model->get_one("latihan_isian_peserta", ["md5(id_kelas)" => $id_kelas, "id_user" => $id, "pertemuan" => $pertemuan['pertemuan']]);
                $data['latihan'] = $latihan['nilai'];
            } else if(in_array($pertemuan['id'], $pg)){
                $latihan = $this->Admin_model->get_one("latihan_peserta", ["md5(id_kelas)" => $id_kelas, "id_user" => $id, "pertemuan" => $pertemuan['pertemuan']]);
                $data['latihan'] = $latihan['nilai'];
            } else {
                $data['latihan'] = "-";
            }
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("tarkibi_2/materi-mufrodat", $data);
            $this->load->view("templates/footer-user", $data);
        } else if(!empty($_GET['latihan'])){
            $pertemuan = $this->searchForId($_GET['latihan'], $list_pertemuan);

            $data['id_kelas'] = $data['kelas']['id_kelas'];
            $data['pertemuan'] = $pertemuan['pertemuan'];
            $data['materi'] = $pertemuan['pertemuan'];
            $data['redirect'] = "tarkibi2/kelas/".$id_kelas."?pertemuan=".MD5($data['materi']);

            if(in_array($pertemuan['id'], $isian)){
                switch ($pertemuan['id']) {
                    case 1:
                        $text = "###############";
                        break;
                    case 2:
                        $text = "######################################################################################################################################################";
                        break;
                    case 4:
                        $text = "#################################################################################";
                        break;
                    case 5:
                        $text = "############################################################################################################################################################################################################################################################";
                        break;
                    case 8:
                        $text = "##############################";
                        break;
                    case 9:
                        $text = "##############################";
                        break;
                    case 10:
                        $text = "###############";
                        break;
                    case 11:
                        $text = "##############################";
                        break;
                    case 12:
                        $text = "##############################";
                        break;
                    case 13:
                        $text = "###########################################################################";
                        break;
                    case 14:
                        $text = "##############################";
                        break;
                    case 15:
                        $text = "###############";
                        break;
                    case 16:
                        $text = "###############";
                        break;
                    case 17:
                        $text = "###############";
                        break;
                    case 18:
                        $text = "###############";
                        break;
                    case 19:
                        $text = "###############";
                        break;
                    case 20:
                        $text = "##############################";
                        break;
                        
                    // default:
                    //     $text = "-";
                }

                // tambahkan data agar tidak eror 
                    $latihan = [
                        "id_user" => $id,
                        "id_kelas" => $data['id_kelas'],
                        "pertemuan" => $data['materi'],
                        "jawaban" => $text,
                        "pembahasan" => $text,
                    ];
                    
                    $cek = $this->Admin_model->get_one("latihan_isian_peserta", ["id_user" => $id, "id_kelas" => $data['id_kelas'], "pertemuan" => $data['materi']]);
                    if(!$cek){
                        $this->Admin_model->add_data("latihan_isian_peserta", $latihan);
                    }
                // tambahkan data agar tidak eror       
                
                $data_latihan = $this->Admin_model->get_one("latihan_isian_peserta", ["id_kelas" => $data['id_kelas'], "id_user" => $id, "pertemuan" => $pertemuan['pertemuan']]);
                $data['data_latihan'] = $data_latihan;
                $data['data_latihan']['id_kumpul'] = md5($data_latihan['id']);
                $data['data_latihan']['jawaban'] = explode("###", $data_latihan['jawaban']);
                $data['data_latihan']['pembahasan'] = explode("###", $data_latihan['pembahasan']);

                $data['title'] = "Tugas ".$pertemuan['pertemuan'];
                $page = "tarkibi_2/tugas/".strtolower(str_replace(" ", "", $pertemuan['pertemuan']));    
            } else if(in_array($pertemuan['id'], $pg)){
                $data['title'] = "Tugas ".$pertemuan['pertemuan'];
                $page = "tarkibi_2/tugas/".strtolower(str_replace(" ", "", $pertemuan['pertemuan']));
                $data['reload'] = "tarkibi2/kelas/".$id_kelas."?latihan=".md5($pertemuan['pertemuan']);
            }
            
            $this->load->view("templates/header-user", $data);
            $this->load->view($page, $data);
            $this->load->view("templates/footer-user", $data);

        } else if(!empty($_GET['ujian'])){
            $data['id_kelas'] = $data['kelas']['id_kelas'];

            $data['latihan'] = $this->Admin_model->get_one("latihan_peserta", ["MD5(id_kelas)" => $id_kelas, "md5(pertemuan)" => $_GET['ujian'], "latihan" => "Form", "id_user" => $id]);
            
            
            if($_GET['ujian'] == md5("Ujian Pekan 1")){
                $data['materi'] = "Ujian Pekan 1";
                $data['redirect'] = "hifdzi1/kelas/".$id_kelas;
                $data['reload'] = "hifdzi1/kelas/".$id_kelas."?ujian=".$_GET['ujian'];

                // pertemuan 1
                $mufrodat = $this->Hifdzi1_model->pertemuan("1");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "0", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "2", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 2
                $mufrodat = $this->Hifdzi1_model->pertemuan("2");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "4", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "6", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "8", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 3
                $mufrodat = $this->Hifdzi1_model->pertemuan("3");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "11", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "14", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "17", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "20", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 4
                $mufrodat = $this->Hifdzi1_model->pertemuan("4");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "23", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "26", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 5
                $mufrodat = $this->Hifdzi1_model->pertemuan("5");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "29", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "32", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "35", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 6
                $mufrodat = $this->Hifdzi1_model->pertemuan("6");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "38", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "41", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "44", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "47", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

            } else if($_GET['ujian'] == md5("Ujian Pekan 2")){
                $data['materi'] = "Ujian Pekan 2";
                $data['redirect'] = "hifdzi1/kelas/".$id_kelas;
                $data['reload'] = "hifdzi1/kelas/".$id_kelas."?ujian=".$_GET['ujian'];

                // pertemuan 7
                $mufrodat = $this->Hifdzi1_model->pertemuan("7");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "0", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "3", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 8
                $mufrodat = $this->Hifdzi1_model->pertemuan("8");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "6", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "9", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 9
                $mufrodat = $this->Hifdzi1_model->pertemuan("9");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "12", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "15", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "18", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 10
                $mufrodat = $this->Hifdzi1_model->pertemuan("10");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "22", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "26", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 11
                $mufrodat = $this->Hifdzi1_model->pertemuan("11");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "30", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "34", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "38", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 12
                $mufrodat = $this->Hifdzi1_model->pertemuan("12");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "42", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "46", "4");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
            } else if($_GET['ujian'] == md5("Ujian Pekan 3")){
                $data['materi'] = "Ujian Pekan 3";
                $data['redirect'] = "hifdzi1/kelas/".$id_kelas;
                $data['reload'] = "hifdzi1/kelas/".$id_kelas."?ujian=".$_GET['ujian'];

                // pertemuan 13
                $mufrodat = $this->Hifdzi1_model->pertemuan("13");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "0", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "2", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "5", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "8", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 14
                $mufrodat = $this->Hifdzi1_model->pertemuan("14");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "11", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "14", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "17", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 15
                $mufrodat = $this->Hifdzi1_model->pertemuan("15");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "20", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "23", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 16
                $mufrodat = $this->Hifdzi1_model->pertemuan("16");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "26", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "29", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 17
                $mufrodat = $this->Hifdzi1_model->pertemuan("17");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "32", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "35", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 18
                $mufrodat = $this->Hifdzi1_model->pertemuan("18");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "38", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "41", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "44", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "47", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
            } else if($_GET['ujian'] == md5("Ujian Pekan 4")){
                $data['materi'] = "Ujian Pekan 4";
                $data['redirect'] = "hifdzi1/kelas/".$id_kelas;
                $data['reload'] = "hifdzi1/kelas/".$id_kelas."?ujian=".$_GET['ujian'];

                // pertemuan 19
                $mufrodat = $this->Hifdzi1_model->pertemuan("19");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "0", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "2", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "4", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "6", "2");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 20
                $mufrodat = $this->Hifdzi1_model->pertemuan("20");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "8", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "11", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "14", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "17", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 21
                $mufrodat = $this->Hifdzi1_model->pertemuan("21");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "20", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "23", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "26", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "29", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 22
                $mufrodat = $this->Hifdzi1_model->pertemuan("22");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "32", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "35", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 23
                $mufrodat = $this->Hifdzi1_model->pertemuan("23");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "38", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "41", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 24
                $mufrodat = $this->Hifdzi1_model->pertemuan("24");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "44", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "47", "3");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
            } else if($_GET['ujian'] == md5("Ujian Akhir")){
                $data['materi'] = "Ujian Akhir";
                $data['redirect'] = "hifdzi1/kelas/".$id_kelas;
                $data['reload'] = "hifdzi1/kelas/".$id_kelas."?ujian=".$_GET['ujian'];

                // pertemuan 1
                $mufrodat = $this->Hifdzi1_model->pertemuan("1");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "0", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "1", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 2
                $mufrodat = $this->Hifdzi1_model->pertemuan("2");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "2", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "3", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "4", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 3
                $mufrodat = $this->Hifdzi1_model->pertemuan("3");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "5", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "6", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "7", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "8", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 4
                $mufrodat = $this->Hifdzi1_model->pertemuan("4");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "9", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "10", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 5
                $mufrodat = $this->Hifdzi1_model->pertemuan("5");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "11", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "12", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "13", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 6
                $mufrodat = $this->Hifdzi1_model->pertemuan("6");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "14", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "15", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "16", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "17", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 7
                $mufrodat = $this->Hifdzi1_model->pertemuan("7");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "18", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "19", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 8
                $mufrodat = $this->Hifdzi1_model->pertemuan("8");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "20", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "21", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 9
                $mufrodat = $this->Hifdzi1_model->pertemuan("9");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "22", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "23", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "24", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 10
                $mufrodat = $this->Hifdzi1_model->pertemuan("10");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "25", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "26", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 11
                $mufrodat = $this->Hifdzi1_model->pertemuan("11");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "27", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "28", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "29", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 12
                $mufrodat = $this->Hifdzi1_model->pertemuan("12");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "30", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "31", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                // pertemuan 13
                $mufrodat = $this->Hifdzi1_model->pertemuan("13");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "32", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "33", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "34", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "35", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 14
                $mufrodat = $this->Hifdzi1_model->pertemuan("14");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "36", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "37", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "38", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 15
                $mufrodat = $this->Hifdzi1_model->pertemuan("15");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "39", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "40", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 16
                $mufrodat = $this->Hifdzi1_model->pertemuan("16");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "41", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "42", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 17
                $mufrodat = $this->Hifdzi1_model->pertemuan("17");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "43", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "44", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 18
                $mufrodat = $this->Hifdzi1_model->pertemuan("18");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "45", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "46", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "47", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "48", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                // pertemuan 19
                $mufrodat = $this->Hifdzi1_model->pertemuan("19");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "49", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "50", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "51", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "52", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 20
                $mufrodat = $this->Hifdzi1_model->pertemuan("20");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "53", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "54", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "55", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "56", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 21
                $mufrodat = $this->Hifdzi1_model->pertemuan("21");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "57", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "58", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("3", $mufrodat, "59", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("4", $mufrodat, "60", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 22
                $mufrodat = $this->Hifdzi1_model->pertemuan("22");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "61", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "62", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 23
                $mufrodat = $this->Hifdzi1_model->pertemuan("23");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "63", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "64", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }

                // pertemuan 24
                $mufrodat = $this->Hifdzi1_model->pertemuan("24");
                shuffle($mufrodat);
                $kata = $this->searchForHal("1", $mufrodat, "65", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
                $kata = $this->searchForHal("2", $mufrodat, "66", "1");
                foreach ($kata as $kata) {
                    $data['mufrodat'][] = $kata;
                }
            }
            
            // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    $data['title'] = $data['materi'];
                    $data['kata'][$i] = $kata;
                    $data['kata_arab'][$i] = $kata['arti'];
                }
            
                shuffle($data['mufrodat']);
                shuffle($data['kata']);
                $this->load->view("templates/header-user", $data);
                $this->load->view("hifdzi_1/latihan-ujian", $data);
                $this->load->view("templates/footer-user", $data);
            // view
            
        } else {
            $data['title'] = "Materi Tarkibi 2";
            
            // pertemuan
                // $pertemuan = $this->Admin_model->get_all("materi_kelas", ["MD5(id_kelas)" => $id_kelas], "materi");
                // foreach ($pertemuan as $i => $pertemuan) {
                //     $data['pertemuan'][$i]['pertemuan'] = $pertemuan['materi'];
                //     $data['pertemuan'][$i]['latihan'] = $this->Admin_model->get_one("latihan_peserta", ["MD5(id_kelas)" => $id_kelas, "pertemuan" => $pertemuan['materi'], "latihan" => "Form", "id_user" => $id]);
                // }
            // pertemuan
    
            $this->load->view("templates/header-user", $data);
            $this->load->view("tarkibi_2/index-materi", $data);
            $this->load->view("templates/footer-user", $data);
        }

    }

    public function ajax_one(){
        $id = $this->session->userdata("id_user");
        $id_kelas = $_GET['id_kelas'];
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["MD5(id_kelas)" => $id_kelas]);
        $data['kelas']['link'] = strtolower(str_replace(" ", "",$data['kelas']['program']))."/kelas/".$id_kelas;
        
        // sertifikat 
        $kelas = $this->Admin_model->get_one("kelas_user", ["id_user" => $id, "md5(id_kelas)" => $id_kelas]);
        $data['kelas']['id_sertifikat'] = md5($kelas['id']);
        $data['kelas']['sertifikat'] = $kelas['sertifikat'];

        if($data['kelas']['id_civitas'] != 0) {
            $pengajar = $this->Admin_model->get_one("civitas", ["id_civitas" => $data['kelas']['id_civitas']]);
            $data['kelas']['guru'] = $pengajar['nama_civitas'];
        } else {
            $data['kelas']['guru'] = "-";
        }
        $data['program'] = $data['kelas']['program'];

        $data['pertemuan'] = [];

        $pertemuan = $this->Admin_model->get_all("materi_kelas", ["md5(id_kelas)" => $id_kelas], "id");
        foreach ($pertemuan as $i => $pertemuan) {
            $data['pertemuan'][$i] = $pertemuan;
            $data['pertemuan'][$i]['link'] = md5($pertemuan['materi']);
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["md5(id_kelas)" => $id_kelas, "pertemuan" => $pertemuan['materi'], "id_user" => $id]);
            if($nilai){
                $data['pertemuan'][$i]['nilai'] = $nilai['nilai'];
            } else {
                $nilai = $this->Admin_model->get_one("latihan_isian_peserta", ["md5(id_kelas)" => $id_kelas, "pertemuan" => $pertemuan['materi'], "id_user" => $id]);
                
                if($nilai){
                    $data['pertemuan'][$i]['nilai'] = $nilai['nilai'];
                } else {
                    $data['pertemuan'][$i]['nilai'] = "-";
                }
            }

            if($pertemuan['materi'] == "Pertemuan 7"){
                $data['pertemuan'][$i]['nilai'] = '<i class="fa fa-check"></i>';
            }
        }

        $data['ujian'] = [];
        $ujian = $this->Admin_model->get_all("ujian_kelas", ["md5(id_kelas)" => $id_kelas]);
        foreach ($ujian as $i => $ujian) {
            $data['ujian'][$i] = $ujian;
            $data['ujian'][$i]['link'] = md5($ujian['materi']);
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["md5(id_kelas)" => $id_kelas, "pertemuan" => $ujian['materi'], "id_user" => $id, "latihan" => "Form"]);
            if($nilai){
                $data['ujian'][$i]['nilai'] = $nilai['nilai'];
            } else {
                $data['ujian'][$i]['nilai'] = "-";
            }
        }

        $data['faq'] = $this->Admin_model->get_all("faq", ["md5(id_kelas)" => $id_kelas]);

        echo json_encode($data);
    }

    public function latihan($id){
        $data['reload'] = "";
        $data['redirect'] = "";
        $data['title'] = "Cek";

        if($id == 1){
            $data['soal'] = [
                [
                    "soal" => "أَنَا أَقْرَأُ الْكِتَابَ فِيْ الْمَسْكَنِ أَنَا أَقْرَأُ الْكِتَابَ فِيْ الْمَسْكَنِ أَنَا أَقْرَأُ الْكِتَابَ فِيْ الْمَسْكَنِ",
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ],
                [
                    "soal" => "أَنَا أَشْرَبُ اللَّبَنَ"
                ]
            ];
        }

        shuffle($data['soal']);

        $this->load->view("templates/header-user", $data);
        $this->load->view("tarkibi_2/latihan-1", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function add_harakat(){
        $answer = $this->input->post("answer");
        echo json_decode($answer);
    }

    public function add_latihan_isian(){
        $data = $this->Tarkibi2_model->add_latihan_isian();
        echo json_encode("1");
    }

    public function add_latihan(){
        $id = $this->session->userdata('id_user');
        // $redirect = $this->input->post("redirect", TRUE);
        $latihan = $this->input->post("latihan", TRUE);
        $id_kelas = $this->input->post("id_kelas", TRUE);
        $nilai = $this->input->post("nilai", TRUE);
        $tipe = $this->input->post("tipe", TRUE);

        $cek = $this->Admin_model->get_one("latihan_peserta", ["id_user" => $id, "pertemuan" => $latihan, "latihan" => $tipe, "id_kelas" => $id_kelas]);
        
        if(!$cek){
            $data = [
                "id_kelas" => $id_kelas,
                "id_user" => $id,
                "pertemuan" => $latihan,
                "nilai" => $nilai,
                "latihan" => $tipe
            ];

            $this->Admin_model->add_data("latihan_peserta", $data);
        } else {
            if($nilai > $cek['nilai']){
                $data = [
                    "id_kelas" => $id_kelas,
                    "id_user" => $id,
                    "pertemuan" => $latihan,
                    "latihan" => $tipe
                ];

                $this->Admin_model->edit_data("latihan_peserta", $data, ["nilai" => $nilai]);
            }
        }

        // redirect($redirect);
        echo json_encode("1");
        // echo json_encode($data);
    }

    public function kumpul_tugas($id){
        $data = $this->Admin_model->get_one("latihan_isian_peserta", ["md5(id)" => $id]);
        $jawaban = explode("###", $data['jawaban']);

        $kosong = false;

        foreach ($jawaban as $i => $value) {
            if($i < COUNT($jawaban)){
                if($value == ""){
                    $kosong = true;
                }
            }
        }

        if($kosong === false){
            echo json_encode("1");
        } else {
            $this->Admin_model->edit_data("latihan_isian_peserta", ["md5(id)" => $id], ["periksa" => 2]);
            echo json_encode(base_url().'tarkibi2/kelas/'.md5($data["id_kelas"]).'?latihan='.md5($data['pertemuan']));
        }
    }

    public function edit_jawaban($id){
        $data = $this->Admin_model->get_one("latihan_isian_peserta", ["md5(id)" => $id]);

        $this->Admin_model->edit_data("latihan_isian_peserta", ["md5(id)" => $id], ["periksa" => 0]);
        echo json_encode(base_url().'tarkibi2/kelas/'.md5($data["id_kelas"]).'?latihan='.md5($data['pertemuan']));
    }

    
    // search 
        // untuk mencari pertemuan
        function searchForId($id, $array) {
            foreach ($array as $key => $val) {
                if ($val['md5'] === $id) {
                    return $val;
                }
            }
            return null;
        }
        
        function searchForBackNext($id, $array) {
            foreach ($array as $key => $val) {
                if ($val['id'] === $id) {
                    return $val;
                }
            }
            return "";
        }

        function searchForHal($hal, $array, $i, $jum) {
            $j = 0;
            foreach ($array as $val) {
                if ($val['hal'] == $hal) {
                    if($jum != $j){
                        $data[$i] = $val;
                        $i++;
                        $j++;
                    }
                }
            }
            return $data;
        }
    // search 

    // get 
        public function search_faq(){
            $search = $this->input->post("search");
            $data['faq'] = [];
            if($search != ""){
                $data['faq'] = $this->Admin_model->get_all_like("faq", "soal", $search, ["program" => "Hifdzi 1"]);
            } else {
                $data['faq'] = $this->Admin_model->get_all("faq", ["program" => "Hifdzi 1"]);
            }
            echo json_encode($data);
        }
    // get 
}