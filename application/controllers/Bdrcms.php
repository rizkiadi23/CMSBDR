<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bdrcms extends CI_Controller {

    public function index($page = 'dashboard') {
        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['title'] = ucfirst($page);
        $data['variables'] = $this->backend_model->get_list();

        if ($page == 'user') {

            $username = $this->session->userdata('username');

            $data['single_var'] = $this->backend_model->get_single_list($page);
            $data['userdata'] = $this->backend_model->get_user_data($username);

            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } elseif ($page == 'pages' || $page == 'category') {

            $data['single_var'] = $this->backend_model->get_single_list($page);
            $data['pagedata'] = $this->backend_model->get_page_data();

            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } else {
            $data['single_var'] = $this->backend_model->get_single_list($page);

            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        }
    }

    // CRUD Reusable Functions : Jika memungkinkan semua CRUD functionality akan dihandle pada bagian dibawah
    public function create() {

        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        
        $data['title'] = 'Create';
        
        $controller = $this->uri->segment(2);
        $data['variables'] = $this->backend_model->get_list();
        
        if ($controller == 'pages') {
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } else if ($controller == 'category') {
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } else if ($controller == 'articles') {
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } else if ($controller == 'goods'){
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        }
    }

    public function edit() {
        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        
        // Seeding Template Form
        $data['title'] = 'Edit';
        $controller = $this->uri->segment(2);
        $controller2 = $this->uri->segment(4);
        $data['variables'] = $this->backend_model->get_list();
        $data['variables_category'] = $this->backend_model->get_category($controller);
        
        if ($controller == 'pages') {
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } else if ($controller == 'category') {
            $data['get_category_var'] = $this->backend_model->get_category($controller2);
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } else if ($controller == 'articles') {
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        } else if ($controller == 'goods'){
            $data['detail_data_page'] = $this->backend_model->get_single_list($controller);
            $data['processToController'] = $controller;
            
            $this->load->view('Admin/Templates/header', $data);
            $this->load->view('Admin/Pages/content', $data);
            $this->load->view('Admin/Templates/footer');
        }
    }

    public function delete($id) {

        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['id'] = $id;
        $this->load->view('Admin/Pages/test', $data);
    }

}
