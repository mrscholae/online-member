<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Latihan_model");
        //Do your magic here
    }

    public function index(){
        
        $data['title'] = "Latihan Fiil";
        $data['mufrodat'] = $this->Latihan_model->data();
        
        
        $this->load->view("templates/header-bebas", $data);
        $this->load->view("latihan/index/index-madhi", $data);
        $this->load->view("templates/footer-bebas", $data);
        
    }

    public function madhi($id){

        $data['title'] = "Latihan Fiil Madhi";
        $data['mufrodat'] = $this->Latihan_model->fiil_madhi($id);
        $data['reload'] = "latihan/madhi/".$id;
        $data['redirect'] = "latihan";
        
        // view
            foreach ($data['mufrodat'] as $i => $kata) {
                $data['kata'][$i] = $kata;
                // $data['kata_arab'][$i] = $kata['arti'];
            }
        
            shuffle($data['mufrodat']);
            shuffle($data['kata']);
            $this->load->view("templates/header-bebas", $data);
            $this->load->view("latihan/latihan/latihan-mufrodat-2", $data);
            $this->load->view("templates/footer-bebas", $data);
        // view

    }

}

/* End of file Latihan.php */
