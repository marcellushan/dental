<?php

class Personal_model extends My_Model {
	
	const DB_TABLE = 'personal';
	const DB_TABLE_PK = 'personal_id';
	
	public $first_name;
	public $middle_name;
	public $last_name;
	public $birthdate;
	public $GHC_ID;
	public $maiden_name;
	public $street;
	public $city;
	public $state;
	public $zip;
	public $home_phone;
	public $cell_phone;
	public $home_email;
	public $work_email;
	public $drivers_license;
	public $cpr;
	
}