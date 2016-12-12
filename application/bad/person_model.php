<?php

class Person_model extends MY_Model {
	
	const DB_TABLE = 'person';
	const DB_TABLE_PK = 'person_id';
	
	public $person_id;
	public $first_name;
	public $middle_name;
	public $last_name;
	public $birth_date;
	public $GHC_ID;
	public $maiden_name;
	public $application_id;
	
	
	public function get_list ($id_name, $id)
	{
		$data =array();
		$q = $this->db->query('select * from ' . $this::DB_TABLE . ' , address  where ' . $id_name . '=' . $id  . ' AND person.person_id = address.person_id');
		foreach ($q->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	public function get_applicant ($id_name, $id)
	{
		$data =array();
		$q = $this->db->query('select * from ' . $this::DB_TABLE . ' , address  where ' . $id_name . '=' . $id  . ' AND person.person_id = address.person_id AND person.person_type = 1');
		foreach ($q->result() as $row)
		{
			$data[] = $row;
		}
		return $data;
	}
	
	public function get_person ($id_name, $id, $type)
	{
	
		$query = $this->db->query('select * from ' . $this::DB_TABLE . ' , address  where ' . $id_name . '=' . $id  . ' 
				 AND person.person_id = address.person_id AND person.person_type =' . $type);
		$row = $query->row();
		return $data[$this::DB_TABLE] = $row;
	}
	
}