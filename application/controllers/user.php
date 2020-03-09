<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('user_model');
        $this->load->model('kategori_model');

        if($this->session->userdata('level')!="user"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        
        $data['title']='List Kategori Buku';
        $data['kategori']=$this->user_model->getAllkategori();

        if($this->input->post('keyword')){
            $data['kategori']=$this->user_model->cariDataKategori();
        }

        $this->load->view('template/header_user', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
        
    }

}

/* End of file user.php */

?>