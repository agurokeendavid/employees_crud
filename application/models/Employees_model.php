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


}
