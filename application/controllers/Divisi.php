<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends CI_Controller
{
	public function index()
	{
		$data['divisi'] = $this->M_divisi->get_divisi();

		$data['title'] = 'Ticketing System';
		$this->template->load('back/template', 'back/divisi/divisi', $data);
	}

	function save_divisi()
	{
		// $this->load->model('M_divisi');
		$this->form_validation->set_rules('divisi', 'divisi', 'trim|required');
		$this->form_validation->set_message('required', '{field} Harus di isi');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if ($this->form_validation->run() == TRUE) {
			$data = [
				'divisi' => $this->input->post('divisi')
			];
			$this->M_divisi->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-info"> Data berhasil disimpan </div>');
			redirect('divisi', 'refresh');
		}

		$this->template->load('back/template3', 'back/divisi/add_divisi');
	}

	function edit_divisi($id)
	{
		// $data['title'] = 'Edit divisi';
		// $id = ['id_divisi'];
		// $data['id_divisi'] = $id;
		// $id = $this->uri->segment(3);
		$data['dvs'] = $this->M_divisi->get_id_divisi($id);
		if ($data['dvs']) {

			$data['title'] = "Ticketing System";
			$this->template->load('back/template2', 'back/divisi/edit_divisi', $data);
			// var_dump($data['divisi']);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data tidak ada </div>');
			redirect('divisi', 'refresh');
		}
	}

	function update_divisi()
	{
		$data = [
			'divisi' => $this->input->post('divisi')
		];

		$this->M_divisi->update($this->input->post('id_divisi'), $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success"> Data berhasil diubah </div>');
		redirect('divisi', 'refresh');
	}

	function delete_divisi($id)
	{
		$delete = $this->M_divisi->get_id_divisi($id);

		if ($delete) {
			$this->M_divisi->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data berhasil dihapus </div>');
			redirect('divisi', 'refresh');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-dark"> Data tidak ada </div>');
			redirect('divisi', 'refresh');
		}
	}
}
