<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_model extends CI_Model {
    public function getAllAkun(){
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query=$this->db->get('user');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdataAkun(){
        $data=[
            "id_user" => $this->input->post('id_user',true),
            "username" => $this->input->post('username',true),
            "password" => $this->input->post('password',true),
            "level" => $this->input->post('level',true)
        ];

        $this->db->insert('user', $data);
    }

    public function hapusdataAkun($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function getAkunByID($id){
        return $this->db->get_where('user',['id_user'=>$id])->row_array();
    }

    public function ubahdataAkun(){
        $data=[
            "id_user" => $this->input->post('id_user',true),
            "username" => $this->input->post('username',true),
            "password" => $this->input->post('password',true),
            "level" => $this->input->post('level',true)
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    public function cariDataAkun(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_user',$keyword);
        $this->db->or_like('username',$keyword);
        $this->db->or_like('level',$keyword);
        return $this->db->get('user')->result_array();
    }

}

/* End of file tokobuku_model.php */


?>