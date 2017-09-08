<?php

/**
 * Description of Category
 *
 * @author Rizki Adi Nugroho
 */
class Category extends CI_Controller {
    //put your code here
    public function index() {
        // No implementation
        echo "Hello Category";
    }
    
    public function create() {
        
        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        
        $this->backend_model->create_category();
        redirect('bdrcms/category');
    }
    
    public function delete($id) {
        // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        
        $this->backend_model->delete_category($id);
        redirect('bdrcms/category');
    }
    
    public function update(){
       // Validasi User Login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        
        $this->backend_model->update_category();
        
        redirect('bdrcms/category'); 
    }
}
