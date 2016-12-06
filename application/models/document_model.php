<?php

class Document_model extends My_Model {
	
	const DB_TABLE = 'document';
	const DB_TABLE_PK = 'document_id';
	
	public $document_type;
	public $url;
	public $application_id;
	public $expiration_date;
	
	public function get_item ($id_name, $id, $type)
	{
	
		$this->db->where($id_name, $id);
		$this->db->where('document_type', $type);
		$query = $this->db->get($this::DB_TABLE);
		$row = $query->row();
		return $data[$this::DB_TABLE] = $row;
	}
	
	public function get_document ($id_name, $id, $type)
	{
	
		$query = $this->db->query('select * from ' . $this::DB_TABLE . ' where ' . $id_name . '=' . $id  . '
				 AND document.document_type =' . $type);
		$row = $query->row();
		return $data[$this::DB_TABLE] = $row;
	}
	
	
}