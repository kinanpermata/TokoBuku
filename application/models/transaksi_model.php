<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {

    public function getAlltransaksi()
    {
        $this->db->select('*');
        $this->db->from('transaksi trk');
        $this->db->join('pembeli pbl','pbl.id_pembeli = trk.id_pembeli');
        $this->db->join('buku bk','bk.id_buku = trk.id_buku');
        $this->db->join('pegawai pgw','pgw.id_pegawai = trk.id_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahdataTransaksi()
    {
        $data=[
            "id_transaksi" => $this->input->post('id_transaksi',true), 
            "id_pembeli" => $this->input->post('id_pembeli',true),
            "id_pegawai" => $this->input->post('id_pegawai',true),
            "id_buku" => $this->input->post('id_buku',true),
            "nama_pembeli" => $this->input->post('nama_pembeli',true),
            "judul_buku" => $this->input->post('judul_buku',true),
            "nama_pegawai" => $this->input->post('nama_pegawai',true),
            "harga" => $this->input->post('harga',true)
        ];
        $this->db->insert('transaksi', $data);
    }

    public function hapusdataTransaksi($id){
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
    }

    public function getTransaksiByID($id){
        return $this->db->get_where('transaksi',['id_transaksi'=> $id])->row_array(); 
    }

    public function ubahdataTransaksi(){
        $data=[
            "id_transaksi" => $this->input->post('id_transaksi',true), 
            "id_pembeli" => $this->input->post('id_pembeli',true),
            "id_pegawai" => $this->input->post('id_pegawai',true),
            "id_buku" => $this->input->post('id_buku',true),
            "nama_pembeli" => $this->input->post('nama_pembeli',true),
            "judul_buku" => $this->input->post('judul_buku',true),
            "nama_pegawai" => $this->input->post('nama_pegawai',true),
            "harga" => $this->input->post('harga',true)
        ];
        $this->db->where('id_transaksi',$this->input->post('id_transaksi'));
        $this->db->update('transaksi',$data);
    }

    public function cariDataTransaksi(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_transaksi',$keyword);
        $this->db->or_like('nama_pembeli',$keyword);
        $this->db->or_like('nama_pegawai',$keyword);
        $this->db->or_like('judul_buku',$keyword);
        $this->db->or_like('harga',$keyword);
        return $this->db-> get('transaksi')->result_array();
    }
}
/* End of file ModelName.php */


?>