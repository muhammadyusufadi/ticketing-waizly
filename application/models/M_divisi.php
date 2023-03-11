<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_divisi extends CI_Model
{
	function get_divisi()
	{
		return $this->db->get('divisi')->result();
	}

	function insert($data)
	{
		return $this->db->insert('divisi', $data);
	}

	function get_id_divisi($id)
	{
		$this->db->where('id_divisi', $id);
		$query = $this->db->get('divisi');
		return $query->row();

		// $this->db->where('id_divisi', $id);
		// return $this->db->get('divisi')->result();
		// return $this->db->get_where($this->_table, ['id_divisi' => $id])->row();
		// print_r($this->db->get_where($this->_table, ['id_divisi' => $id])->row());
	}

	function update($id, $data)
	{
		$this->db->where('id_divisi', $id);
		$this->db->update('divisi', $data);
	}

	function delete($id)
	{
		$this->db->where('id_divisi', $id);
		$this->db->delete('divisi');
	}
}
