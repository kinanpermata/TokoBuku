<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('buku_model');
         $this->load->helper('form');
         $this->load->library('form_validation');

         if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='List Buku';
        $data['buku']=$this->buku_model->getAllbuku();
        
        if($this->input->post('keyword')){
            #code...
            $data['buku']=$this->buku_model->cariDataBuku();
        }
        
        $this->load->view('template/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Buku';
        $this->form_validation->set_rules('id_buku', 'Id_buku', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul_buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('buku/tambah', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->buku_model->tambahdatabuku();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('buku', 'refresh');
        }
        
    }

    public function hapus($id){
        $this->buku_model->hapusdatabuku($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('buku','refresh');
    }

    public function detail($id){
        $data['title']='Detail Buku';
        $data['buku']=$this->buku_model->getbukuByID($id);
        $this->load->view('template/header', $data);
        $this->load->view('buku/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id){
        $data['title']='Form Edit Data Buku';
        $data['buku']=$this->buku_model->getbukuByID($id);
        
        $this->form_validation->set_rules('id_buku', 'Id_buku', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul_buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('buku/edit', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->buku_model->ubahdatabuku();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('buku', 'refresh');
        }
    }

}

/* End of file Controllername.php */


?>