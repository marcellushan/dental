<?php

class Address_model extends My_Model {
	
	const DB_TABLE = 'address';
	const DB_TABLE_PK = 'address_id';
	
	public $street;
	public $city;
	public $state;
	public $zip;
	public $person_id;
	
	
	
	public function update($id)
	{
		echo $id;
// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
		$this->db->where('application_id', $id);
		$this->db->update('application', $this);
	}
	
	
}