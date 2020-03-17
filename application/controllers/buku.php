<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        if ($this->session->userdata('level') != "admin") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'List Buku';
        $data['buku'] = $this->Buku_model->getAllbuku();

        if ($this->input->post('keyword')) {
            #code...
            $data['buku'] = $this->Buku_model->cariDataBuku();
        }

        $this->load->view('template/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['buku'] = $this->Buku_model->getAllbuku();
        $data['title'] = 'Form Menambahkan Data Buku';
        $this->form_validation->set_rules('id_buku', 'Id_buku', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('buku/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $upload = $this->Buku_model->upload();

            if ($upload['result'] == 'success') {
                $this->Buku_model->tambahdatabuku($upload);
                $this->session->set_flashdata('flash-data', 'ditambahkan');
                redirect('buku', 'refresh');
            } else {
                echo $upload['error'];
            }
        }
    }

    public function hapus($id)
    {
        $this->Buku_model->hapusdatabuku($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('buku', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Buku';
        $data['buku'] = $this->Buku_model->getbukuByID($id);

        $this->form_validation->set_rules('id_buku', 'Id_buku', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('buku/edit', $data);
            $this->load->view('template/footer');
        } else {
            $upload = $this->Buku_model->upload();
            if ($upload['result'] == 'success') {
                $this->Buku_model->ubahdatabuku($upload);
                $this->session->set_flashdata('flash-data', 'diedit');
                redirect('buku', 'refresh');
            } else {
                echo $upload['error'];
            }
        }
    }
}

/* End of file Controllername.php */
