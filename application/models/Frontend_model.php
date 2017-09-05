<?php
	class Frontend_model extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		public function get($page) {

			$query = $this->db->get_where('bdr_fe_pages', array('title' => $page));
			return $query->result_array();
		}
	}