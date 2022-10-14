<?php
class Employees_model extends CI_Model {
	private $_table_name = 'employees';
	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data) {
		$this->db->insert($this->_table_name, $data);
		return $this->db->insert_id();
	}

	public function get_all() {
		return $this->db->where('deleted_at', null)
			->get($this->_table_name)
			->result_array();
	}

	public function update($data, $id) {
		$this->db->where('id', $id)
			->update($this->_table_name, $data);

		return $id;
	}

	public function delete($data, $id) {
		$this->db->where('id', $id)
			->update($this->_table_name, $data);

		return $id;
	}

	public function get($id) {
		return $this->db->where('id', $id)
			->get($this->_table_name)
			->row_array();
	}

}
