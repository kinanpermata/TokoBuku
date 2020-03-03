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

    public function tambahdataBuku()
    {
        $data=[
            "id_buku" => $this->input->post('id_buku',true), 
            "judul_buku" => $this->input->post('judul_buku',true),
            "pengarang" => $this->input->post('pengarang',true),
            "penerbit" => $this->input->post('penerbit',true)
        ];
        $this->db->insert('buku', $data);
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
            "penerbit" => $this->input->post('penerbit',true)
        ];
        $this->db->where('id_buku',$this->input->post('id_buku'));
        $this->db->update('buku',$data);
    }

    public function cariDataBuku(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_buku',$keyword);
        $this->db->or_like('judul_buku',$keyword);
        $this->db->or_like('pengarang',$keyword);
        $this->db->or_like('penerbit',$keyword);
        return $this->db-> get('buku')->result_array();
    }
}
/* End of file ModelName.php */


?>