<?php

class Demo_model extends My_Model {
	
	const DB_TABLE = 'demo';
	const DB_TABLE_PK = 'demo_id';
	
	public $race;
	public $fulltime;
	public $latino;
	public $male;
	public $foreign;
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