<?php

class Program_model extends My_Model {
	
	const DB_TABLE = 'program';
	const DB_TABLE_PK = 'program_id';
	

	public $fulltime;
	public $hear;
	public $application_id;
	
	public function race_text($race_id)
	{	
// 		$data=[];
		$this->db->where('race_id', $race_id);
		$query = $this->db->get('race');
		$row = $query->row();
// 		echo $row->race_text;
		return $row;
		
	}
	
	
}