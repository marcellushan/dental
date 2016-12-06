<?php

class Application_model extends My_Model {
	
	const DB_TABLE = 'application';
	const DB_TABLE_PK = 'application_id';
	
// 	public $application_id;
	public $application_date;
	
	
	
	public function update($id)
	{
		echo $id;
// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
		$this->db->where('application_id', $id);
		$this->db->update('application', $this);
	}
	
	public function get()
	{
		$data =array();
		$q = $this->db->query("select * from application join person ON application.application_id = person.application_id where person_type=1");
		
		foreach ($q->result() as $row) 
		{
			$data[] = $row;
		}
		return $data;
	}
	
	
}