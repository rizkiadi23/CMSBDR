<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login() {
		$data['title'] = 'Sing in';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('Admin/Pages/login', $data);
		} else {
			// Get Username
			$username = $this->input->post('username');
			// Get Password
			$password = $this->input->post('password');

			// Login User
			$user_id = $this->backend_model->login($username, $password);

			if($user_id) {
				// Membuat Session
				$user_data = array(
					'user_id' 	=> $user_id,
					'username' 	=> $username,
					'logged_in' => true
				);

				$this->session->set_userdata($user_data);

				redirect('bdrcms/dashboard');
			} else {
				redirect('users/login');
			}
		}
	}

	public function logout() {
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		redirect('users/login');
	}
}