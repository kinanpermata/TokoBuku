<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli_model extends CI_Model {
    public function getAllpembeli(){
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query=$this->db->get('pembeli');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdatapembeli(){
        $data=[
            "id_pembeli" => $this->input->post('id_pembeli',true),
            "nama_pembeli" => $this->input->post('nama_pembeli',true),
            "alamat" => $this->input->post('alamat',true),
            "notelp" => $this->input->post('notelp',true)
        ];

        $this->db->insert('pembeli', $data);
    }

    public function hapusdatapembeli($id){
        $this->db->where('id_pembeli', $id);
        $this->db->delete('pembeli');
    }

    public function getpembeliByID($id){
        return $this->db->get_where('pembeli',['id_pembeli'=>$id])->row_array();
    }

    public function ubahdatapembeli(){
        $data=[
            "id_pembeli" => $this->input->post('id_pembeli',true),
            "nama_pembeli" => $this->input->post('nama_pembeli',true),
            "alamat" => $this->input->post('alamat',true),
            "notelp" => $this->input->post('notelp',true)
        ];
        $this->db->where('id_pembeli', $this->input->post('id_pembeli'));
        $this->db->update('pembeli', $data);
    }

    public function cariDataPembeli(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_pembeli',$keyword);
        $this->db->or_like('nama_pembeli',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('notelp',$keyword);
        return $this->db->get('pembeli')->result_array();
    }

}

/* End of file tokobuku_model.php */


?>