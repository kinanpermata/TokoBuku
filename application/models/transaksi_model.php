<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model {

    public function getAlltransaksi()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query = $this->db->get('transaksi');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdataTransaksi()
    {
        $data=[
            "id_transaksi" => $this->input->post('id_transaksi',true), 
            "id_pembeli" => $this->input->post('id_pembeli',true),
            "id_pegawai" => $this->input->post('id_pegawai',true),
            "id_buku" => $this->input->post('id_buku',true),
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
            "harga" => $this->input->post('harga',true)
        ];
        $this->db->where('id_transaksi',$this->input->post('id_transaksi'));
        $this->db->update('transaksi',$data);
    }

    public function cariDataTransaksi(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_transaksi',$keyword);
        $this->db->or_like('id_pembeli',$keyword);
        return $this->db-> get('transaksi')->result_array();
    }
}
/* End of file ModelName.php */


?>