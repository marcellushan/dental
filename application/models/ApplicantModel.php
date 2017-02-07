<?php

class ApplicantModel extends my_model {
	
	const DB_TABLE = 'applicant';
	const DB_TABLE_PK = 'applicant_id';
	
// 	public $applicant_id;
	public $application_date;
	public $password;
	public $first_name;
	public $middle_name;
	public $last_name;
	public $birth_date;
	public $maiden_name;
 	public $GHC_ID;
 	public $street;
 	public $city;
 	public $state;
 	public $zip;
 	public $preferred_phone;
 	public $backup_phone;
 	public $preferred_email;
 	public $backup_email;
 	public $discipline;
 	public $e_first_name;
 	public $e_last_name;
 	public $relationship;
 	public $e_street;
 	public $e_city;
 	public $e_state;
 	public $e_zip;
 	public $e_preferred_phone;
 	public $e_backup_phone;
 	public $e_email;
 	public $student_type;
 	public $hear;
 	public $race;
 	public $latino;
 	public $gender;
 	public $foreign;
 	
 	
	
	
	
	
	public function update($id, $data)
	{
// 		echo $id;
// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
		$this->db->where('applicant_id', $id);
		$this->db->update('applicant', $data);
	}
	
// 	public function get()
// 	{
// 		$data =array();
// 		$q = $this->db->query("select * from applicant join person ON applicant.applicant_id = person.application_id where person_type=1");
		
// 		foreach ($q->result() as $row) 
// 		{
// 			$data[] = $row;
// 		}
// 		return $data;
// 	}

public function get_login ($id_name, $id)
{

    $this->db->where($id_name, $id);
//    $this->db->where("password", $password);
    $query = $this->db->get($this::DB_TABLE);
    $row = $query->row();
    return $data[$this::DB_TABLE] = $row;
}

    public function entry_exists($id_name, $id)
    {

        $this->db->where($id_name, $id);
//        $this->db->where("password", $password);
        $query = $this->db->get($this::DB_TABLE);
        $row = $query->row();
        return $data[$this::DB_TABLE] = $row;
    }
	
	
}