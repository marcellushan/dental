<?php

class TranscriptModel extends My_Model {
	
	const DB_TABLE = 'transcript';
	const DB_TABLE_PK = 'transcript_id';
	
	public $submission_date;
	public $state;
	public $school;
    public $image;
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