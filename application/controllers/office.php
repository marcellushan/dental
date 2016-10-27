<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Office extends CI_Controller {
	
	public function index() 
	{	
		$this->load->view('templates/header');
		$this->load->model('application_Model');
		$person = new Application_model();
		$person->load(73);
		echo $person->first_name;
	}
	
	public function school()
	{
		$this->load->view('templates/header');
		$this->load->model('school_Model');
		$test = new School_model();
		$test->get_item('application_id', 89);
		var_dump($test);
		echo $test->state;
	}
}