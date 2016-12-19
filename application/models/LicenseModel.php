<?php

class LicenseModel extends My_Model {
	
	const DB_TABLE = 'license';
	const DB_TABLE_PK = 'license_id';
	
	public $submission_date;
	public $state;
	public $active;
	public $number;
	public $applicant_id;
	
	public function get_list ($id_name, $id) {
		$data =[];
		$q = $this->db->query('select * from ' . $this::DB_TABLE . ' where ' . $id_name . '=' . $id);
		foreach ($q->result() as $row) {
			$data[] = $row;
		}
		return $data;
	}
	
	
}