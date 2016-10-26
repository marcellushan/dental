<?php

class Emergency_model extends My_Model {
	
	const DB_TABLE = 'emergency';
	const DB_TABLE_PK = 'emergency_id';
	
	public $first_name;
	public $middle_name;
	public $last_name;
	public $street;
	public $city;
	public $state;
	public $zip;
	public $home_phone;
	public $cell_phone;
	public $home_email;
	public $work_email;
	public $application_id;
	
	
}