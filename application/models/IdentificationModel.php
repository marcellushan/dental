<?php

class IdentificationModel extends My_Model {
	
	const DB_TABLE = 'identification';
	const DB_TABLE_PK = 'identification_id';
	
	public $submission_date;
	public $image;
	public $applicant_id;
	
// 	public function get_item ($id_name, $id, $type)
// 	{
	
// 		$this->db->where($id_name, $id);
// 		$this->db->where('document_type', $type);
// 		$query = $this->db->get($this::DB_TABLE);
// 		$row = $query->row();
// 		return $data[$this::DB_TABLE] = $row;
// 	}
	
// 	public function get_document ($id_name, $id, $type)
// 	{
	
// 		$query = $this->db->query('select * from ' . $this::DB_TABLE . ' where ' . $id_name . '=' . $id  . '
// 				 AND document.document_type =' . $type);
// 		$row = $query->row();
// 		return $data[$this::DB_TABLE] = $row;
// 	}

	public function update($id, $data)
	{
		// 		echo $id;
		// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
		$this->db->where('identification_id', $id);
		$this->db->update('identification', $data);
	}
	
	
	
	
}