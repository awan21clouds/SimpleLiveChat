<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Chat extends CI_Controller {

    public function __contruct() {
        parent::__contruct();
    }

    public function index() {
        $this->load->view("simple_register");
    }

    public function setUser() {
        try {
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'username' => $this->input->post('username')
            );
            $this->model_chat->insert_user($data);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    public function getUser() {
        $data = array('data' => array());
        if ($query = $this->model_chat->view_user()) {
            $sub_data = array();
            foreach ($query as $r) {
                array_push($sub_data, $r);
            }
            $data = array('data' => $sub_data);
        }
        header("content-type: application/json");
        echo json_encode($data);
        exit;
    }

    public function simpleChat() {
        $data = array();
        $user_id = $this->input->post('user_id');
        if ($query = $this->model_chat->view_user_by_id($user_id)) {
            $data = array('user' => $query[0]);
        }
        $this->load->view("simple_chat", $data);
    }

    public function setChat() {
        try {
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'chat_id' => $this->input->post('chat_id'),
                'chat_content' => $this->input->post('chat_content'),
                'chat_time' => $this->input->post('chat_time')
            );
            $this->model_chat->insert_chat($data);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
        
    public function getChat() {
        $data = array('data' => array());
        if ($query = $this->model_chat->view_chat()) {
            $sub_data = array();
            foreach ($query as $r) {
                array_push($sub_data, $r);
            }
            $data = array('data' => $sub_data);
        }
        header("content-type: application/json");
        echo json_encode($data);
        exit;
    }
}
