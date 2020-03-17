<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('Transaksi_model');
         $this->load->model('Kasir_model');
         $this->load->helper('form');
         $this->load->library('form_validation');

         //validasi level
        if($this->session->userdata('level')!="kasir"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='Data Transaksi';
        $data['transaksi']=$this->Kasir_model->getAlltransaksi();
        if($this->input->post('keyword')){
            # code...
            $data['transaksi']=$this->Kasir_model->cariDataTransaksi();
        }
        $this->load->view('template/header_kasir',$data);
        $this->load->view('kasir/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file kasir.php */

?>