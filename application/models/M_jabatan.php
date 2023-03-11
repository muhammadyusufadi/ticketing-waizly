<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jabatan extends CI_Model
{
	private $_table = "jabatan"; //nama tabel

	public $id_jabatan;

	function get_jabatan()
	{
		return $this->db->get('jabatan')->result();
	}

	function insert($data)
	{
		return $this->db->insert('jabatan', $data);
	}

	function get_id_jabatan($id)
	{
		$this->db->where('id_jabatan', $id);
		$query = $this->db->get('jabatan');
		return $query->row();

		// $this->db->where('id_jabatan', $id);
		// return $this->db->get('jabatan')->result();
		// return $this->db->get_where($this->_table, ['id_jabatan' => $id])->row();
		// print_r($this->db->get_where($this->_table, ['id_jabatan' => $id])->row());
	}

	function update($id, $data)
	{
		$this->db->where('id_jabatan', $id);
		$this->db->update('jabatan', $data);
	}

	function delete($id)
	{
		$this->db->where('id_jabatan', $id);
		$this->db->delete('jabatan');
	}
}

/* End of file ModelName.php */
