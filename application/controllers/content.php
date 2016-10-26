<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {
	
	public function index() 
	{	

			$this->load->model('state_model');
			$data['states'] = $this->state_model->get_states();
// 		}
// 		$data['states'] = $this->state_model->getall();
		$this->load->view('templates/header');
		$this->load->view('application', $data);	
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
// 			$this->load->view('application');
// 		}
// 		else
// 		{
			session_start();
			$this->load->model('application_Model');
			$person = new Application_model();
			foreach ($_POST as $key=>$value)
			{
				$person->$key = $this->input->post($key);
			}
			$person->save();
			$_SESSION['id'] = $person->application_id;
			$this->load->view('templates/header');
			$this->load->view('school');
// 		}
		
		
		
		
// 		$this->application_Model->index();
// 		foreach ($_POST as $key=>$value)
// 		{
// 			echo"$key=$value";
// 		}

	}
	
	public function license()
	{
		session_start();
		echo $_SESSION['id'];
		$this->load->model('school_Model');
		$school = new School_model();
		$school->application_id = $_SESSION['id'];
		foreach ($_POST as $key=>$value)
		{
			$school->$key = $this->input->post($key);
		}
		$school->save();
		$this->load->view('templates/header');
		$this->load->view('license');
}
	
public function more_licenses()
{
		session_start();
		echo $_SESSION['id'];
		$this->load->model('license_Model');
		$license = new License_model();
		$license->application_id = $_SESSION['id'];
		foreach ($_POST as $key=>$value)
		{
			$license->$key = $this->input->post($key);
		}
		$license->save();
	$this->load->view('templates/header');
	$this->load->view('more_licenses');
}
	
	public function emergency()
	{
		$this->load->view('templates/header');
		$this->load->view('emergency');
	}
	
	public function employer()
	{
		session_start();
		echo $_SESSION['id'];
		$this->load->model('emergency_Model');
		$emergency = new Emergency_model();
		$emergency->application_id = $_SESSION['id'];
		foreach ($_POST as $key=>$value)
		{
			$emergency->$key = $this->input->post($key);
		}
		$emergency->save();
		$this->load->view('templates/header');
		$this->load->view('employer');
	}
	
	public function more_employers()
	{
		session_start();

		$this->load->model('employer_Model');
		$employer = new Employer_model();
		$employer->application_id = $_SESSION['id'];
		foreach ($_POST as $key=>$value)
		{
			$employer->$key = $this->input->post($key);
		}
		$employer->save();
		$this->load->view('templates/header');
		$this->load->view('more_employers');
	}
	
public function demo()
	{
		$this->load->view('templates/header');
		$this->load->view('demo');
	}
	
	
	public function submit()
	{
		session_start();
// 		echo $_SESSION['id'];
// 				echo "<pre>";
// 				var_dump($_POST);
// 				echo "</pre>";
		$this->load->model('demo_Model');
		$demo = new Demo_model();
		$demo->application_id = $_SESSION['id'];
		foreach ($_POST as $key=>$value)
		{
			$demo->$key = $this->input->post($key);
		}
		 $demo->save();
		$this->load->view('templates/header');
		$this->load->view('thankyou');
	}
	
	public function driver()
	{
		$this->load->library('upload');
		$this->load->view('templates/header');
		$this->load->view('driver');
	}
	

	
	
}