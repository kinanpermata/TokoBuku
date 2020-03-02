<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class relasi_model extends CI_Model {

    public function getAllRelasiBuku(){
        $this->db->select('*');
        $this->db->from('transaksi trk');
        $this->db->join('buku bk','bk.id_buku = trk.id_buku');
        $this->db->join('pegawai pgw','pgw.id_pegawai = trk.id_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

}

/* End of file ModelName.php */
