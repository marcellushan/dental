<?php

class Phone_model extends My_Model {
	
	const DB_TABLE = 'phone';
	const DB_TABLE_PK = 'phone_id';
	
	public $phone_number;
	public $phone_type;
	public $person_id;
	
	
	
	public function update($id)
	{
		echo $id;
// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
		$this->db->where('application_id', $id);
		$this->db->update('application', $this);
	}
	
	
}