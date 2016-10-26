<?php

class License_model extends My_Model {
	
	const DB_TABLE = 'license';
	const DB_TABLE_PK = 'license_id';
	
	public $state;
	public $active;
	public $number;
	public $application_id;
	
	
}