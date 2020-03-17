<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir_model extends CI_Model {

    public function getAlltransaksi()
    {
        $this->db->select('*');
        $this->db->from('transaksi trk');
        $this->db->join('pembeli pbl','pbl.id_pembeli = trk.id_pembeli');
        $this->db->join('buku bk','bk.id_buku = trk.id_buku');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cariDataTransaksi(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_transaksi',$keyword);
        $this->db->or_like('nama_pembeli',$keyword);
        $this->db->or_like('judul_buku',$keyword);
        $this->db->or_like('harga',$keyword);
        return $this->db-> get('transaksi')->result_array();
    }

}

/* End of file kasir_model.php */

?>