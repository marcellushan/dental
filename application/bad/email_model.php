<?php

class Email_model extends My_Model {
	
	const DB_TABLE = 'email';
	const DB_TABLE_PK = 'email_id';
	
	public $email_address;
	public $email_type;
	public $person_id;
	
	
	
	public function update($id)
	{
		echo $id;
// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
		$this->db->where('application_id', $id);
		$this->db->update('application', $this);
	}
	
	
}