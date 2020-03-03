<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai_model extends CI_Model {
    public function getAllpegawai(){
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query=$this->db->get('pegawai');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdatapegawai(){
        $data=[
            "id_pegawai" => $this->input->post('id_pegawai',true),
            "nama_pegawai" => $this->input->post('nama_pegawai',true),
            "alamat" => $this->input->post('alamat',true),
            "notelp" => $this->input->post('notelp',true)
        ];

        $this->db->insert('pegawai', $data);
    }

    public function hapusdatapegawai($id){
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
    }

    public function getpegawaiByID($id){
        return $this->db->get_where('pegawai',['id_pegawai'=>$id])->row_array();
    }

    public function ubahdatapegawai(){
        $data=[
            "id_pegawai" => $this->input->post('id_pegawai',true),
            "nama_pegawai" => $this->input->post('nama_pegawai',true),
            "alamat" => $this->input->post('alamat',true),
            "notelp" => $this->input->post('notelp',true)
        ];
        $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
        $this->db->update('pegawai', $data);
    }

    public function cariDataPegawai(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_pegawai',$keyword);
        $this->db->or_like('nama_pegawai',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('notelp')->result_array();
    }

}

/* End of file tokobuku_model.php */


?>