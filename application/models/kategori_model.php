<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function getAllkategori()
    {
        $this->db->select('ktg.*, bk.id_buku, bk.judul_buku');
        $this->db->from('kategori ktg');
        $this->db->join('buku bk','bk.id_buku = ktg.id_buku');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahdatakategori()
    {
        $data=[
            "id_kategori" => $this->input->post('id_kategori',true), 
            "id_buku" => $this->input->post('id_buku',true),
            "judul_buku" => $this->input->post('judul_buku',true),
            "kategori" => $this->input->post('kategori',true)
        ];
        $this->db->insert('kategori', $data);
    }

    public function hapusdataKategori($id){
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    public function getKategoriByID($id){
        return $this->db->get_where('kategori',['id_kategori'=> $id])->row_array(); 
    }

    public function ubahdataKategori(){
        $data=[
            "id_kategori" => $this->input->post('id_kategori',true), 
            "id_buku" => $this->input->post('id_buku',true),
            "judul_buku" => $this->input->post('judul_buku',true),
            "kategori" => $this->input->post('kategori',true)
        ];
        $this->db->where('id_kategori',$this->input->post('id_kategori'));
        $this->db->update('kategori',$data);
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
/* End of file ModelName.php */


?>