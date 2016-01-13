<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Chat extends CI_Model {

    public function insert_user($data) {
        $this->db->insert('user', $data);
    }
    
    public function view_user() {
        $this->db->select('*')
                ->from('user');                
        $query = $this->db->get();
        return $query->result();
    }
    
    public function view_user_By_id($id) {
        $this->db->select('*')
                ->from('user')                
                ->where('user_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function insert_chat($data) {
        $this->db->insert('chat', $data);
    }
    
    public function view_chat() {
        $this->db->select('*')
                ->from('chat')               
                ->join('user', 'user.user_id = chat.user_id')
                ->order_by("chat_time", "asc");
        $query = $this->db->get();
        return $query->result();
    }
}


