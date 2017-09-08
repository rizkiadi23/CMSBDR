<?php

class Backend_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // 1. Get Data Function
    public function get_list() {

        $query = $this->db->get('bdr_be_pages');
        return $query->result_array();
    }

    public function get_single_list($page) {

        $query = $this->db->get_where('bdr_be_pages', array('title' => $page));
        return $query->result_array();
    }

    public function get_user_data($username) {
        $query = $this->db->get_where('bdr_be_users', array('username' => $username));
        return $query->result_array();
    }

    public function get_page_data() {
        $query = $this->db->get('bdr_fe_pages');
        return $query->result_array();
    }

    // 2. Login & Register Methods in model Handler
    public function login($username, $password) {
        // Validasi user

        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('bdr_be_users');

        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
        return true;
    }
    
    // 3. Model for Category Page CRUD
    public function create_category() {
        $query = $this->db->query("SELECT parent_id FROM bdr_fe_pages");
        
        $categoryArray  = $query->result_array();
        $rows           = $query->num_rows();
        
        for ($i=0; $i < $rows; $i++) {
            if($categoryArray[$i]['parent_id'] != $i) {
                $this->db->set('parent_id', $i, 'image_id', $i);
                $this->db->where('parent_id', $categoryArray[$i]['parent_id']);
                $this->db->update('bdr_fe_pages');
            }
        }
        
        $data = array(
            'parent_id' => $rows,
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'slug' => $this->input->post('slug'),
            'image_id' => $rows
        );
        
        return $this->db->insert('bdr_fe_pages', $data);
    }
    
    public function delete_category($id) {
        
        $this->db->where('parent_id', $id);
        $this->db->delete('bdr_fe_pages');
        
        $query = $this->db->query("SELECT parent_id FROM bdr_fe_pages");

        $categoryArray = $query->result_array();
        $rows = $query->num_rows();

        for ($i = 0; $i < $rows; $i++) {
            if ($categoryArray[$i]['parent_id'] != $i) {
                $this->db->set('parent_id', $i,'image_id', $i);
                $this->db->where('parent_id', $categoryArray[$i]['parent_id']);
                $this->db->update('bdr_fe_pages');
            }
        }

        return true;
    }
    
    public function get_category($parent_id) {        
        $query = $this->db->get_where('bdr_fe_pages', ['parent_id' => $parent_id]);
        return $query->row_array();
    }
    
    public function update_category() {
        $data = array(
            'title' => $this->input->post('title'),
            'slug'  => $this->input->post('slug'),
            'content' => $this->input->post('content'),
        );

        $this->db->where('parent_id', $this->input->post('parent_id'));
        return $this->db->update('bdr_fe_pages', $data);
    }

}
