<?php

class Application_model extends My_Model {
	
	const DB_TABLE = 'application';
	const DB_TABLE_PK = 'application_id';
	
	public $application_id;
	public $application_date;
	
	
	
	public function update($id)
	{
		echo $id;
// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
		$this->db->where('application_id', $id);
		$this->db->update('application', $this);
	}
	
	
}