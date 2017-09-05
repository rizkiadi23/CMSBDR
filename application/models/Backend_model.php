<?php
	class Backend_model extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		public function get_list() {

			$query = $this->db->get('bdr_be_pages');
			return $query->result_array();
		}

		public function get_single_list($page) {

			$query = $this->db->get_where('bdr_be_pages', array('title' => $page));
			return $query->result_array();
		}

		public function get_user_data($username) {
			$query 		= $this->db->get_where('bdr_be_users', array('username' => $username));
			return $query->result_array();
		}

		public function get_page_data() {
			$query		= $this->db->get('bdr_fe_pages');
			return $query->result_array();
		}

		// 2. Login & Register Methods in model Handler
		public function login($username, $password) {
			// Validasi user

			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('bdr_be_users');

			if($result->num_rows() == 1) {
				return $result->row(0)->id;
			} else {
				return false;
			}
			return true;
		}
	}