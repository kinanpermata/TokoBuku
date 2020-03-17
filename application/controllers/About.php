<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='About Us';
        $this->load->view('template/header',$data);
        $this->load->view('About/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>