<?php

class Document_model extends My_Model {
	
	const DB_TABLE = 'document';
	const DB_TABLE_PK = 'document_id';
	
	public $document_type;
	public $url;
	public $application_id;
	
	
}