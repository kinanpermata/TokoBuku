<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class relasi extends CI_Controller {

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
         parent::__construct();
         $this->load->model('transaksi_model');
         $this->load->model('pembeli_model');
         $this->load->model('pegawai_model');
         $this->load->model('buku_model');
         $this->load->model('relasi_model');
    }

    public function index()
    {
        $data['title']='Tabel Relasi';
        $data['transaksi']=$this->relasi_model->getAllRelasiBuku();
        $this->load->view('template/header',$data);
        $this->load->view('relasi/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>