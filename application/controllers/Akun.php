<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('Akun_model');
         $this->load->helper('form');
         $this->load->library('form_validation');

         if($this->session->userdata('level')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='Data User';
        $data['user']=$this->Akun_model->getAllAkun();
        if($this->input->post('keyword')){
            # code...
            $data['user']=$this->Akun_model->cariDataAkun();
        }
        $this->load->view('template/header',$data);
        $this->load->view('Akun/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title']='Form Menambahkan Data User';
        $this->form_validation->set_rules('id_user', 'ID User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('Akun/tambah',$data);
            $this->load->view('template/footer');
        }else{
            # code...
            $this->Akun_model->tambahdataAkun();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('Akun','refresh');
        }
    }

    public function hapus($id){
        $this->Akun_model->hapusdataAkun($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('Akun','refresh');
    }

    public function edit($id)
    {
        $data['title']='Form Edit Data Akun';
        $data['user']=$this->Akun_model->getAkunByID($id);
        $this->form_validation->set_rules('id_user', 'ID User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('Akun/edit',$data);
            $this->load->view('template/footer');
        }else{
            # code...
            $this->Akun_model->ubahdataAkun();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('Akun','refresh');
        }
    }

}

/* End of file Controllername.php */

?>