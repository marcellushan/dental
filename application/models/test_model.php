<?php

class Test_model extends My_Model {
	
	const DB_TABLE = 'application';
	const DB_TABLE_PK = 'application_id';
	
	public $application_id;
	public $application_date;
	public $first_name;
	public $middle_name;
	public $last_name;
	public $birthdate;
	public $GHC_ID;
	public $maiden_name;
	public $street;
	public $city;
	public $state;
	public $zip;
	public $home_phone;
	public $cell_phone;
	public $home_email;
	public $work_email;
	
	
	
// 	public function update($id)
// 	{
// 		echo $id;
// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
// 		$this->db->where('application_id', $id);
// 		$this->db->update('application', $this);
// 	}
	
	public function load($id) {
		        $query = $this->db->get_where($this::DB_TABLE, array(
		            $this::DB_TABLE_PK => $id,
		        ));
		       return $this->populate($query->row());
	}
	
}