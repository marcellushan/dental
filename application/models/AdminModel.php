<?php

class AdminModel extends My_Model {
	
	const DB_TABLE = 'admin';
	const DB_TABLE_PK = 'admin_id';
	

 	public $username;
 	public $first_name;
 	public $last_name;
 		
	public function verify($id)
    {

        $this->db->where('applicant_id', $id);
//    $this->db->where("password", $password);
        $query = $this->db->get($this::DB_TABLE);
        $row = $query->row();
        return $data[$this::DB_TABLE] = $row;
    }

    public function get_login ($id_name, $id)
    {

        $this->db->where($id_name, $id);
//    $this->db->where("password", $password);
        $query = $this->db->get($this::DB_TABLE);
        $row = $query->row();
        return $data[$this::DB_TABLE] = $row;
    }
}