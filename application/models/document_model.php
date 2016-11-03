<?php

class Document_model extends My_Model {
	
	const DB_TABLE = 'document';
	const DB_TABLE_PK = 'document_id';
	
	public $document_type;
	public $url;
	public $application_id;
	
	public function get_item ($id_name, $id, $type)
	{
	
		$this->db->where($id_name, $id);
		$this->db->where('document_type', $type);
		$query = $this->db->get($this::DB_TABLE);
		$row = $query->row();
		return $data[$this::DB_TABLE] = $row;
	}
	
	
}