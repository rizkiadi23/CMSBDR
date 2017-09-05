<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($page = 'beranda')
	{
		$data['title'] = ucfirst($page);

		if ($page == 'tentang' || $page == 'ikutan' || $page == 'tulisan') {

			$data['pagedata'] = $this->frontend_model->get($page);

			$this->load->view('Templates/header', $data);
			$this->load->view('Pages/'.$page, $data);
			$this->load->view('Templates/footer');
		} else {

			$this->load->view('Templates/header', $data);
			$this->load->view('Pages/'.$page);
			$this->load->view('Templates/footer');
		}
	}
}