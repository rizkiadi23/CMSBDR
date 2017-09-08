<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index() {

        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['title'] = 'Create Page';
        $data['variables'] = $this->backend_model->get_list();
        $data['judul'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');

        $this->load->view('Admin/Pages/test', $data);
        
        //$this->load->view('Admin/Templates/header', $data);
        //$this->load->view('Admin/Pages/content', $data);
        //$this->load->view('Admin/Templates/footer');
    }
    
    public function create() {
        
        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['title'] = 'Create Page';
        $data['variables'] = $this->backend_model->get_list();
        $data['judul'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');

        $this->load->view('Admin/Pages/test', $data);
    }
    
    public function delete() {
        // Logic to delete the thread / post 
    }
    
    public function update() {
        
    }

}
