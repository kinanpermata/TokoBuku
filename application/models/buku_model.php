<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class buku_model extends CI_Model {

    public function getAllbuku()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query = $this->db->get('buku');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdataBuku($upload)
    {
        $data=[
            "id_buku" => $this->input->post('id_buku',true), 
            "judul_buku" => $this->input->post('judul_buku',true),
            "pengarang" => $this->input->post('pengarang',true),
            "penerbit" => $this->input->post('penerbit',true),
            "harga" => $this->input->post('harga',true),
            "stok" => $this->input->post('stok',true),
            "gambar" => $upload['file']['file_name']
        ];
        $this->db->insert('buku', $data);
    }

    public function upload(){
        $config['upload_path'] = './uploads/buku/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else{
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_error());
            return $return;
        }
    }
    
    public function hapusdataBuku($id){
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }

    public function getBukuByID($id){
        return $this->db->get_where('buku',['id_buku'=> $id])->row_array(); 
    }

    public function ubahdataBuku(){
        $data=[
            "id_buku" => $this->input->post('id_buku',true), 
            "judul_buku" => $this->input->post('judul_buku',true),
            "pengarang" => $this->input->post('pengarang',true),
            "penerbit" => $this->input->post('penerbit',true),
            "harga" => $this->input->post('harga',true),
            "stok" => $this->input->post('stok',true)
        ];
        $this->db->where('id_buku',$this->input->post('id_buku'));
        $this->db->update('buku',$data);
    }

    public function cariDataBuku(){
        $keyword=$this->input->post('keyword');
        $this->db->like('judul_buku',$keyword);
        $this->db->or_like('pengarang',$keyword);
        return $this->db-> get('buku')->result_array();
    }
}
/* End of file ModelName.php */


?>