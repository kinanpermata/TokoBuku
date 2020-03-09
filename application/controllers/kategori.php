<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('buku_model');
         $this->load->model('kategori_model');
         $this->load->helper('form');
         $this->load->library('form_validation');

         if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='List Kategori Buku';
        $data['kategori']=$this->kategori_model->getAllkategori();
        
        if($this->input->post('keyword')){
            #code...
            $data['kategori']=$this->kategori_model->cariDataKategori();
        }
        
        $this->load->view('template/header', $data);
        $this->load->view('kategori/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['buku'] = $this->buku_model->getAllbuku();
        $data['title']='Form Menambahkan Data Kategori Buku';
        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('kategori/tambah', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->kategori_model->tambahdatakategori();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('kategori', 'refresh');
        }
        
    }

    public function hapus($id){
        $this->kategori_model->hapusdataKategori($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('kategori','refresh');
    }

    public function edit($id){
        $data['title']='Form Edit Data Kategori Buku';
        $data['buku'] = $this->buku_model->getAllbuku();
        
        $this->form_validation->set_rules('id_kategori', 'Id_kategori', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');

        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('kategori/edit', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->kategori_model->ubahdataKategori();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('kategori', 'refresh');
        }
    }

}

/* End of file Controllername.php */


?>