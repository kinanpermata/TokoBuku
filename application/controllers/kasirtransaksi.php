<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kasirtransaksi extends CI_Controller {

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
         parent::__construct();
         $this->load->model('Transaksi_model');
         $this->load->model('Pembeli_model');
         $this->load->model('Pegawai_model');
         $this->load->model('Buku_model');
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
        $data['transaksi']=$this->Transaksi_model->getAlltransaksi();
        if($this->input->post('keyword')){
            # code...
            $data['transaksi']=$this->Transaksi_model->cariDataTransaksi();
        }
        $this->load->view('template/header_kasir',$data);
        $this->load->view('kasirtransaksi/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title']='Form Menambahkan Data Transaksi';
        
        $this->form_validation->set_rules('id_transaksi', 'ID Transaksi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required | numeric');
        
        $data['pembeli'] = $this->Pembeli_model->getAllpembeli();
        $data['pegawai'] = $this->Pegawai_model->getAllpegawai();
        $data['buku'] = $this->Buku_model->getAllbuku();

        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header_kasir',$data);
            $this->load->view('kasirtransaksi/tambah',$data);
            $this->load->view('template/footer');
        }else{
            # code...
            $this->Transaksi_model->tambahdataTransaksi();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('transaksi','refresh');
        }
    }

    public function hapus($id){
        $this->Transaksi_model->hapusdataTransaksi($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('transaksi','refresh');
    }

    public function edit($id)
    {
        $data['title']='Form Edit Data Transaksi';
        $data['transaksi']=$this->Transaksi_model->getTransaksiByID($id);

        $this->form_validation->set_rules('id_transaksi', 'ID Transaksi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required | numeric');

        $data['pembeli'] = $this->Pembeli_model->getAllpembeli();
        $data['pegawai'] = $this->Pegawai_model->getAllpegawai();
        $data['buku'] = $this->Buku_model->getAllbuku();

        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header_kasir',$data);
            $this->load->view('kasirtransaksi/edit',$data);
            $this->load->view('template/footer');
        }else{
            # code...
            $this->Transaksi_model->ubahdataTransaksi();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('transaksi','refresh');
        }
    }

}

/* End of file Controllername.php */

?>