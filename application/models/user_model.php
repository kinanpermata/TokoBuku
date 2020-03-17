<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAllkategori()
    {
        $this->db->select('ktg.*, bk.id_buku, bk.judul_buku');
        $this->db->from('kategori ktg');
        $this->db->join('buku bk','bk.id_buku = ktg.id_buku');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cariDataKategori(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_kategori',$keyword);
        $this->db->or_like('id_buku',$keyword);
        $this->db->or_like('judul_buku',$keyword);
        $this->db->or_like('kategori',$keyword);
        return $this->db-> get('kategori')->result_array();
    }

}

/* End of file user_model.php */

?>