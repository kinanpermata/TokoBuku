<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembeli extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('pembeli_model');
         $this->load->helper('form');
         $this->load->library('form_validation');

         if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='List Pembeli';
        $data['pembeli']=$this->pembeli_model->getAllpembeli();
        
        if($this->input->post('keyword')){
            #code...
            $data['pembeli']=$this->pembeli_model->cariDataPembeli();
        }
        
        $this->load->view('template/header', $data);
        $this->load->view('pembeli/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Pembeli';
        $this->form_validation->set_rules('nama_pembeli', 'nama_pembeli', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('pembeli/tambah', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->pembeli_model->tambahdatapembeli();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('pembeli', 'refresh');
        }
        
    }

    public function hapus($id_pembeli){
        $this->pembeli_model->hapusdatapembeli($id_pembeli);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('pembeli','refresh');
    }

    public function detail($id_pembeli){
        $data['title']='Detail Pembeli';
        $data['pembeli']=$this->pembeli_model->getpembeliByID($id_pembeli);
        $this->load->view('template/header', $data);
        $this->load->view('pembeli/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id_pembeli){
        $data['title']='Form Edit Data Pembeli';
        $data['pembeli']=$this->pembeli_model->getpembeliByID($id_pembeli);
        
        $this->form_validation->set_rules('nama_pembeli', 'nama_pembeli', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|numeric');

        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('pembeli/edit', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->pembeli_model->ubahdatapembeli();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('pembeli', 'refresh');
        }
    }

}

/* End of file Controllername.php */


?>