<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    function login($username,$password){
        $this->db->select('username, password, level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query=$this->db->get();
        if($query->num_rows() == 1){
            return $query->result();
        } else{
            return false;
        }
    }

    public function signin()
    {
        $data['title'] = 'Sign In';
        $data['level'] = ['admin','nonadmin'];
        $data=[
            "username" => $this->input->post('username',true), 
            "password" => $this->input->post('password',true),
            "level" => $this->input->post('level',true),
        ];
        $this->db->insert('user', $data);
    }


}

/* End of file ModelName.php */
