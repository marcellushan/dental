<?php

class SchoolModel extends My_Model {
	
	const DB_TABLE = 'school';
	const DB_TABLE_PK = 'school_id';
	
	public $name;
	public $year;
	public $state;
	public $image;
	public $applicant_id;
	
	
}