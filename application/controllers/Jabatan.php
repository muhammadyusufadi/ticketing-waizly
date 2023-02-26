<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

	public function index()
	{
		// $this->load->model('M_jabatan');
		$data['jabatan'] = $this->M_jabatan->get_jabatan();

		$data['title'] = 'Ticketing System';
		$this->template->load('back/template', 'back/jabatan/jabatan', $data);
		// $data['meta'] = $this->load->view('back/template/meta', $data, TRUE);
		// $data['header'] = $this->load->view('back/template/header', $data, TRUE);
		// $data['sidebar'] = $this->load->view('back/template/sidebar', $data, TRUE);
		// $data['contents'] = $this->load->view('back/jabatan/jabatan', $data, TRUE);
		// $data['footer'] = $this->load->view('back/template/footer', $data, TRUE);
		// $data['script'] = $this->load->view('back/template/script', $data, TRUE);

		// $this->load->view('back/template', $data);
		// var_dump($data['jabatan']);
	}

	function save_jabatan()
	{
		// $this->load->model('M_jabatan');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_message('required', '{field} Harus di isi');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if ($this->form_validation->run() == TRUE) {
			$data = [
				'jabatan' => $this->input->post('jabatan')
			];
			$this->M_jabatan->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-info"> Data Berhasil Di Simpan </div>');
			redirect('jabatan', 'refresh');
		} else {
			$this->index();
		}
	}

	function edit_jabatan($id)
	{
		// $data['title'] = 'Edit Jabatan';
		// $id = ['id_jabatan'];
		// $data['id_jabatan'] = $id;
		// $id = $this->uri->segment(3);
		$data['jbt'] = $this->M_jabatan->get_id_jabatan($id);
		if ($data['jbt']) {

			$data['title'] = "Ticketing System";
			$this->template->load('back/template2', 'back/jabatan/edit_jabatan', $data);
			// $data['meta'] = $this->load->view('back/template/meta', $data, TRUE);
			// $data['header'] = $this->load->view('back/template/header', $data, TRUE);
			// $data['sidebar'] = $this->load->view('back/template/sidebar', $data, TRUE);
			// $data['contents'] = $this->load->view('back/jabatan/edit_jabatan', $data, TRUE);
			// $data['footer'] = $this->load->view('back/template/footer', $data, TRUE);
			// $data['script'] = $this->load->view('back/template/script', $data, TRUE);

			// $this->load->view('back/template', $data);

			// var_dump($data['jabatan']);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data Tidak ada </div>');
			redirect('jabatan', 'refresh');
		}
	}
}

/* End of file Controllername.php */
