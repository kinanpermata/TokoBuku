<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kasirbuku extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('Buku_model');
         $this->load->helper('form');
         $this->load->library('form_validation');

         if($this->session->userdata('level')!="kasir"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='List Buku';
        $data['buku']=$this->Buku_model->getAllbuku();
        
        if($this->input->post('keyword')){
            #code...
            $data['buku']=$this->Buku_model->cariDataBuku();
        }
        
        $this->load->view('template/header_kasir', $data);
        $this->load->view('kasirbuku/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Controllername.php */


?>