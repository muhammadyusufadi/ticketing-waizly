<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{

		$data['title'] = 'Ticketing System';
		// $data['meta'] = $this->load->view('back/template/meta', $data, TRUE);
		// $data['header'] = $this->load->view('back/template/header', $data, TRUE);
		// $data['sidebar'] = $this->load->view('back/template/sidebar', $data, TRUE);
		// $data['contents'] = $this->load->view('back/dashboard', $data, TRUE);
		// $data['footer'] = $this->load->view('back/template/footer', $data, TRUE);
		// $data['script'] = $this->load->view('back/template/script', $data, TRUE);

		// $this->load->view('back/template', $data);
		$this->template->load('back/template', 'back/dashboard');
	}
}

/* End of file Controllername.php */