<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('Pegawai_model');
         $this->load->helper('form');
         $this->load->library('form_validation');

         if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='Data Pegawai';
        $data['pegawai']=$this->Pegawai_model->getAllPegawai();
        if($this->input->post('keyword')){
            # code...
            $data['pegawai']=$this->Pegawai_model->cariDataPegawai();
        }
        $this->load->view('template/header',$data);
        $this->load->view('pegawai/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title']='Form Menambahkan Data Pegawai';
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'ID Buku', 'required');
        $this->form_validation->set_rules('notelp', 'No Telp', 'required');

        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('pegawai/tambah',$data);
            $this->load->view('template/footer');
        }else{
            # code...
            $this->Pegawai_model->tambahdataPegawai();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('pegawai','refresh');
        }
    }

    public function hapus($id){
        $this->Pegawai_model->hapusdataPegawai($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('pegawai','refresh');
    }

    public function detail($id)
    {
        $data['title']='Detail Pegawai';
        $data['pegawai']=$this->Pegawai_model->getPegawaiByID($id);
        $this->load->view('template/header',$data);
        $this->load->view('pegawai/detail',$data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['title']='Form Edit Data Pegawai';
        $data['pegawai']=$this->Pegawai_model->getPegawaiByID($id);
        $this->form_validation->set_rules('id_pegawai', 'ID Pegawai', 'required');
        $this->form_validation->set_rules('nama_pegawai', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'ID Buku', 'required');
        $this->form_validation->set_rules('notelp', 'No Telp', 'required');

        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('pegawai/edit',$data);
            $this->load->view('template/footer');
        }else{
            # code...
            $this->Pegawai_model->ubahdataPegawai();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('pegawai','refresh');
        }
    }

}

/* End of file Controllername.php */

?>