<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {
	
	public function index() 
	{
		$this->load->view('templates/header');
		$this->load->view('personal');	
	}
	
	public function school()
	{
// 		$this->load->library('form_validation');
// 		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
// 		$this->form_validation->set_rules('middle_name', 'Middle Name');
// 		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
// 		$this->form_validation->set_rules('birthdate', 'Date of Birth', 'required');
// 		$this->form_validation->set_rules('GHC_ID', 'GHC_ID');
// 		$this->form_validation->set_rules('maiden', 'maiden');
// 		$this->form_validation->set_rules('street', 'Street Address', 'required');
// 		$this->form_validation->set_rules('city', 'City', 'required');
// 		$this->form_validation->set_rules('State', 'State', 'required');
// 		$this->form_validation->set_rules('home_phone', 'Home Phone', 'required');
// 		$this->form_validation->set_rules('cell_phone', 'Cell Phone');
// 		$this->form_validation->set_rules('home_email', 'Home Email Address', 'required');
// 		$this->form_validation->set_rules('work_email', 'Work Email Address');
// 		if ($this->form_validation->run() == FALSE)
// 		{
// 			$this->load->view('templates/header');
// 			$this->load->view('personal');
// 		}
// 		else
// 		{
			$this->load->model('personal_Model');
// 			$this->load->library('session');
			$this->session->id = '1';
			$person = new Personal_model();
			foreach ($_POST as $key=>$value)
			{
				$person->$key = $this->input->post($key);
			}
			echo $person->save();
			$person->personal_id;
			echo $this->session->id;
			$this->load->view('templates/header');
			$this->load->view('school');
// 		}
		
		
		
		
// 		$this->personal_Model->index();
// 		foreach ($_POST as $key=>$value)
// 		{
// 			echo"$key=$value";
// 		}

	}
	
	public function license()
	{
		if(@$_POST['add']=="1")
		{
			$this->load->model('school_Model');
			$school = new School_model();
// 			$this->load->library('session');
			echo $_SESSION['id'];
			foreach ($_POST as $key=>$value)
			{
				$person->$key = $this->input->post($key);
			}
			$school->save();
			$this->load->view('templates/header');
			$this->load->view('school');
		}
		else 
		{
			$this->load->view('templates/header');
			$this->load->view('license');
		}
	}
	
	public function emergency()
	{
		// 		echo "got here";
		// 		echo "<pre>";
		// 		var_dump($_POST);
		// 		echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('emergency');
	}
	
	public function employment()
	{
		// 		echo "got here";
		// 		echo "<pre>";
		// 		var_dump($_POST);
		// 		echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('employment');
	}
	
	public function program()
	{
		// 		echo "got here";
		// 		echo "<pre>";
		// 		var_dump($_POST);
		// 		echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('program');
	}
	

	
	
}