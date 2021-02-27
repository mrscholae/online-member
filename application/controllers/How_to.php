<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class How_to extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function hifdzi1(){
        $data['title'] = "Cara Penggunaan HIFDZI 1";

        $this->load->view("templates/header-user", $data);
        $this->load->view("pages/how_to/hifdzi1", $data);
        $this->load->view("templates/footer-user", $data);
    }
    

}

/* End of file How_to.php */
