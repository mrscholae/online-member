<?php 
class Kosakata1 extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Admin_model");
        $this->load->model("Kosakata1_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if(!$this->session->userdata('id_user')){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("auth"));
        }
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

        if(!empty($_GET['pertemuan'])){
            $pertemuan = $this->searchForId($_GET['pertemuan'], $list_pertemuan);
            
            // tombol back pertemuan 
                $val = $pertemuan['id']-1;
                $back = $this->Admin_model->get_one("materi_kelas", ["md5(id_kelas)" => $id_kelas, "materi" => "Pertemuan $val"]);
                // jika ada tampilkan tombol jika tidak tombol tidak tampil 
                    if($back) {
                        $data['back'] = md5($back['materi']);
                    } else {
                        $data['back'] = "";
                    }
            
            // tombol next pertemuan
                $val = $pertemuan['id']+1;
                $next = $this->Admin_model->get_one("materi_kelas", ["md5(id_kelas)" => $id_kelas, "materi" => "Pertemuan $val"]);
                // jika ada tampilkan tombol jika tidak tombol tidak tampil 
                    if($next) {
                        $data['next'] = md5($next['materi']);
                    } else {
                        $data['next'] = "";
                    }

            $data['title'] = $pertemuan['pertemuan'];
            
            // materi berupa gambar
                $data['image'] = $this->Kosakata1_model->materi_pertemuan($pertemuan['id']);

            // latihan
                $data['latihan1'] = $this->Admin_model->get_one("latihan_peserta", ["MD5(id_kelas)" => $id_kelas, "pertemuan" => $data['title'], "latihan" => "Latihan 1", "id_user" => $id]);
                $data['latihan2'] = $this->Admin_model->get_one("latihan_peserta", ["MD5(id_kelas)" => $id_kelas, "pertemuan" => $data['title'], "latihan" => "Latihan 2", "id_user" => $id]);
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("kosakata1/materi-pertemuan", $data);
            $this->load->view("templates/footer-user", $data);
        } else if(!empty($_GET['latihan1'])){
            $pertemuan = $this->searchForId($_GET['latihan1'], $list_pertemuan);

            $data['materi'] = $pertemuan['pertemuan'];
            $data['redirect'] = "kosakata1/kelas/".$id_kelas."?pertemuan=".MD5($data['materi']);
            $data['reload'] = "kosakata1/kelas/".$id_kelas."?latihan1=".MD5($data['materi']);
            $data['id_kelas'] = $data['kelas']['id_kelas'];

            $data['latihan'] = $this->Admin_model->get_one("latihan_peserta", ["MD5(id_kelas)" => $id_kelas, "pertemuan" => $data['materi'], "latihan" => "Latihan 1", "id_user" => $id]);
            
            $mufrodat = $this->Kosakata1_model->pertemuan($pertemuan['id']);
            shuffle($mufrodat);

            $data['mufrodat'] = $mufrodat;
            
            // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    $data['title'] = "Latihan 1 " . $pertemuan['pertemuan'];
                    $data['kata'][$i] = $kata;
                    $data['kata_arab'][$i] = $kata['arti'];
                }
            
                shuffle($data['mufrodat']);
                shuffle($data['kata']);
                $this->load->view("templates/header-user", $data);
                $this->load->view("kosakata1/latihan-mufrodat-1", $data);
                $this->load->view("templates/footer-user", $data);
            // view
        } else if(!empty($_GET['latihan2'])){
            $pertemuan = $this->searchForId($_GET['latihan2'], $list_pertemuan);

            $data['materi'] = $pertemuan['pertemuan'];
            $data['redirect'] = "kosakata1/kelas/".$id_kelas."?pertemuan=".MD5($data['materi']);
            $data['reload'] = "kosakata1/kelas/".$id_kelas."?latihan2=".MD5($data['materi']);
            $data['id_kelas'] = $data['kelas']['id_kelas'];

            $data['latihan'] = $this->Admin_model->get_one("latihan_peserta", ["MD5(id_kelas)" => $id_kelas, "pertemuan" => $data['materi'], "latihan" => "Latihan 2", "id_user" => $id]);
            
            $mufrodat = $this->Kosakata1_model->pertemuan($pertemuan['id']);
            shuffle($mufrodat);

            $data['mufrodat'] = $mufrodat;
            
            // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    $data['title'] = "Latihan 2 " . $pertemuan['pertemuan'];
                    $data['kata'][$i] = $kata;
                    $data['kata_arab'][$i] = $kata['arti'];
                }
            
                shuffle($data['mufrodat']);
                shuffle($data['kata']);
                $this->load->view("templates/header-user", $data);
                $this->load->view("kosakata1/latihan-mufrodat-2", $data);
                $this->load->view("templates/footer-user", $data);
            // view
        } else if(!empty($_GET['ujian'])){
            $data['id_kelas'] = $data['kelas']['id_kelas'];

            $data['latihan'] = $this->Admin_model->get_one("latihan_peserta", ["MD5(id_kelas)" => $id_kelas, "md5(pertemuan)" => $_GET['ujian'], "latihan" => "Form", "id_user" => $id]);
            
            
            if($_GET['ujian'] == md5("Ujian Pekan 1")){
                $data['materi'] = "Ujian Pekan 1";
                $data['redirect'] = "hifdzi1/kelas/".$id_kelas;
                $data['reload'] = "hifdzi1/kelas/".$id_kelas."?ujian=".$_GET['ujian'];

                // pertemuan 1
                $mufrodat = $this->Kosakata1_model->pertemuan("1");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("2");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("3");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("4");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("5");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("6");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("7");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("8");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("9");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("10");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("11");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("12");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("13");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("14");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("15");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("16");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("17");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("18");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("19");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("20");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("21");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("22");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("23");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("24");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("1");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("2");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("3");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("4");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("5");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("6");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("7");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("8");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("9");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("10");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("11");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("12");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("13");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("14");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("15");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("16");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("17");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("18");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("19");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("20");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("21");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("22");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("23");
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
                $mufrodat = $this->Kosakata1_model->pertemuan("24");
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
                $this->load->view("kosakata1/latihan-ujian", $data);
                $this->load->view("templates/footer-user", $data);
            // view
            
        } else {
            $data['title'] = "Materi Kosa Kata I";
    
            $this->load->view("templates/header-user", $data);
            $this->load->view("kosakata1/index", $data);
            $this->load->view("templates/footer-user", $data);
        }

    }

    public function how_to($id_kelas){
        $data['title'] = "Cara Penggunaan Kosa Kata 1";
        $data['id_kelas'] = $id_kelas;
        
        $this->load->view("templates/header-user", $data);
        $this->load->view("kosakata1/howto", $data);
        $this->load->view("templates/footer-user", $data);
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
            $nilai = $this->Admin_model->get_all("latihan_peserta", ["md5(id_kelas)" => $id_kelas, "pertemuan" => $pertemuan['materi'], "id_user" => $id]);
            if(COUNT($nilai) == 2 ){
                if($nilai[0]['nilai'] == 100 && $nilai[1]['nilai'] == 100){
                    $data['pertemuan'][$i]['nilai'] = '<i class="fa fa-check-circle text-success"></i>';
                } else {
                    $data['pertemuan'][$i]['nilai'] = "-";    
                }
            } else {
                $data['pertemuan'][$i]['nilai'] = "-";
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

    public function get_detail_kelas(){
        $id_user = $this->session->userdata('id_user');
        $id = $this->input->post("id");
        $data = $this->Admin_model->get_one("kelas", ["id_kelas" => $id]);
        $data['pertemuan'] = $this->Admin_model->get_all("materi_kelas", ["id_kelas" => $id], "id");

        // nilai latihan 1 
            foreach ($data['pertemuan'] as $i => $pertemuan) {
                $data['latihan_1'][$i]['pertemuan'] = $pertemuan['materi'];
                $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => $pertemuan['materi'], "latihan" => "Latihan 1"]);
                if($nilai) {
                    $data['latihan_1'][$i]['nilai'] = $nilai['nilai'];
                } else {
                    $data['latihan_1'][$i]['nilai'] = 0;
                }
            }
        // nilai latihan 1 
        
        // nilai latihan 2
            foreach ($data['pertemuan'] as $i => $pertemuan) {
                $data['latihan_2'][$i]['pertemuan'] = $pertemuan['materi'];
                $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => $pertemuan['materi'], "latihan" => "Latihan 2"]);
                if($nilai) {
                    $data['latihan_2'][$i]['nilai'] = $nilai['nilai'];
                } else {
                    $data['latihan_2'][$i]['nilai'] = 0;
                }
            }
        // nilai latihan 2

        // nilai ujian
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 1", "latihan" => "Form"]);
            if($nilai){$data['ujian'][0] = $nilai['nilai'];} else {$data['ujian'][0] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 1", "latihan" => "Input"]);
            if($nilai){$data['ujian'][1] = $nilai['nilai'];} else {$data['ujian'][1] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 2", "latihan" => "Form"]);
            if($nilai){$data['ujian'][2] = $nilai['nilai'];} else {$data['ujian'][2] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 2", "latihan" => "Input"]);
            if($nilai){$data['ujian'][3] = $nilai['nilai'];} else {$data['ujian'][3] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pertengahan", "latihan" => "Input"]);
            if($nilai){$data['ujian'][4] = $nilai['nilai'];} else {$data['ujian'][4] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 3", "latihan" => "Form"]);
            if($nilai){$data['ujian'][5] = $nilai['nilai'];} else {$data['ujian'][5] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 3", "latihan" => "Input"]);
            if($nilai){$data['ujian'][6] = $nilai['nilai'];} else {$data['ujian'][6] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 4", "latihan" => "Form"]);
            if($nilai){$data['ujian'][7] = $nilai['nilai'];} else {$data['ujian'][7] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 4", "latihan" => "Input"]);
            if($nilai){$data['ujian'][8] = $nilai['nilai'];} else {$data['ujian'][8] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Akhir", "latihan" => "Form"]);
            if($nilai){$data['ujian'][9] = $nilai['nilai'];} else {$data['ujian'][9] = 0;};
            $nilai = $this->Admin_model->get_one("latihan_peserta", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Akhir", "latihan" => "Input"]);
            if($nilai){$data['ujian'][10] = $nilai['nilai'];} else {$data['ujian'][10] = 0;};
        // nilai ujian

        $data['absen'] = $this->Admin_model->get_all("presensi_peserta", ["id_kelas" => $id, "id_user" => $id_user]);
        $peserta = $this->Admin_model->get_all("kelas_user", ["id_kelas" => $id]);
        foreach ($peserta as $i => $peserta) {
            $data['peserta'][$i] = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
        }
        echo json_encode($data);
    }

    // add
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
    // add 

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
    // search 
}
?>