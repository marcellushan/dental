<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index() 
	{	
		$this->load->helper(array('form', 'url'));
		$this->load->view('templates/header');
// 		$this->load->library('form_validation');
// 		$this->form_validation->set_rules('username', 'Applied', 'required');
// 		if ($this->form_validation->run() == FALSE)
// 		{
			$this->load->view('start');
// 		}
// 		else
// 		{
// 			$this->load->view('formsuccess');
// 			$this->load->view('noapp');
// 		}
	
    
	}
	
	public function applicant()
	{
// 		$this->load->helper(array('form', 'url'));
// 		$this->load->library('form_validation');
// 		$this->form_validation->set_rules('first_name', 'First Name', 'required');

		$this->load->model('State_model');
		$data['states'] = $this->State_model->get_states();
		
		$this->load->view('templates/header');
// 		if ($this->form_validation->run() == FALSE)
// 		{
			
					$this->load->view('applicant', $data);
					
// 		}
// 		else
// 		{
// 			$this->load->view('driver');
// 		}

	
	}
	
	public function driver()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('templates/header');
// 		$this->form_validation->set_rules('first_name', 'First Name', 'required');
// 		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
// 		$this->form_validation->set_rules('street', 'Street', 'required');
// 		$this->form_validation->set_rules('city', 'City', 'required');
// 		$this->form_validation->set_rules('zip', 'Zip Code', 'required');
// 		$this->form_validation->set_rules('preferred_phone', 'Preferred Phone', 'required');
// 		$this->form_validation->set_rules('preferred_email', 'Preferred Email', 'required|valid_email');
		
	
// 				$this->load->model('State_model');
// 				$data['states'] = $this->State_model->get_states();
	
// 		if ($this->form_validation->run() == FALSE)
// 		{
				
// 			$this->load->view('applicant', $data);
				
// 		}
// 		else
// 		{
			session_start();
			$this->load->model('applicant_Model');
			$applicant = new Applicant_model();
			$applicant->application_date = date('Y-m-d');
			foreach ($_POST as $key=>$value)
			{
				$applicant->$key = $this->input->post($key);
			}
			$applicant->save();
			$_SESSION['applicant_id'] = $applicant->applicant_id;
// 			$this->load->view('templates/header');
			$this->load->view('driver');
// 			$this->load->view('driver');
// 		}
	
	
	}
	
	
	public function cpr()
	{
		
		
		
		session_start();
		if(!@$_FILES['fileToUpload']['error']) {
				
			$myRandom = rand(1, 10000);
			// 			echo "<pre>";
			// 			print_r($_FILES);
			// 			echo "</pre>";
			// 			($servername=='localhost' ? $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/printing/uploads/" : $target_dir = "/var/www/html/printing/uploads/");
			$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/dental/assets/uploads/";
			// webdev
			// 	$target_dir = "/var/www/html/dental/assets/uploads/";
			$target_file = $target_dir . $myRandom . basename($_FILES["fileToUpload"]["name"]);
			$myFile = basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$image_url = base_url() . "assets/uploads/" .  $myRandom . basename($_FILES["fileToUpload"]["name"]);
			$this->load->model('applicant_model');
			$data = array('driver' => $image_url);
			$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $data);
		}
	
		$this->load->view('templates/header');
		$this->load->view('cpr');
	}
	
	public function school()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('expiration_date', 'Expiration Date', 'required');
		$this->load->view('templates/header');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('cpr');		
		}
		else
		{
			session_start();
			if(!@$_FILES['fileToUpload']['error']) {
					
				$myRandom = rand(1, 10000);
				// 			($servername=='localhost' ? $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/printing/uploads/" : $target_dir = "/var/www/html/printing/uploads/");
				$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/dental/assets/uploads/";
				// webdev
	// 			$target_dir = "/var/www/html/dental/assets/uploads/";
				$target_file = $target_dir . $myRandom . basename($_FILES["fileToUpload"]["name"]);
				$myFile = basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				$image_url = base_url() . "assets/uploads/" .  $myRandom . basename($_FILES["fileToUpload"]["name"]);
				$this->load->model('applicant_model');
				$data = array('cpr' => $image_url, 'cpr_expire' => $_POST['expiration_date']);
				$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $data);
					
			}
			$this->load->model('state_model');
			$data['states'] = $this->state_model->get_states();
// 			$this->load->view('templates/header');
			$this->load->view('school', $data);
		}
	}
	
	public function license()
	{
		$this->load->view('templates/header');
// 		this->load->helper(array('form', 'url'));
// 		$this->load->library('form_validation');
// 		
// 		$this->form_validation->set_rules('name', 'School Attended', 'required');
// 		$this->form_validation->set_rules('year', 'Year of Graduation', 'required');
// 		if ($this->form_validation->run() == FALSE)
// 				{
				
// 			$this->load->view('school');
				
// 					}
// 					else
// 						{
							session_start();
							$this->load->model('state_model');
							$data['states'] = $this->state_model->get_states();
							$this->load->model('school_Model');
							$school = new School_model();
							$school->applicant_id = $_SESSION['applicant_id'];
							foreach ($_POST as $key=>$value)
							{
								$school->$key = $this->input->post($key);
							}
							$school->save();
// 							$this->load->view('templates/header');
							$this->load->view('license', $data);
// 						}
	}
	
	
	public function more_licenses()
	{
		$this->load->view('templates/header');
// 		this->load->helper(array('form', 'url'));
// 		$this->load->library('form_validation');
// 		$this->form_validation->set_rules('number', 'License Number', 'required');
// 		if ($this->form_validation->run() == FALSE)
// 		{

// 			$this->load->view('license');

// 		}
// 		else
// 		{
			session_start();
			$this->load->model('license_Model');
			$license = new License_model();
			$license->applicant_id = $_SESSION['applicant_id'];
			foreach ($_POST as $key=>$value)
			{
				$license->$key = $this->input->post($key);
			}
			$license->save();
			$this->load->view('more_licenses');
// 		}
	}
	
	public function emergency()
	{
		session_start();
		$this->load->model('state_model');
		$data['states'] = $this->state_model->get_states();
		$this->load->view('templates/header');
		$this->load->view('emergency', $data);
	}
	
	public function employer()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('templates/header');
// 		$this->form_validation->set_rules('e_first_name', 'First Name', 'required');
// 		$this->form_validation->set_rules('e_last_name', 'Last Name', 'required');
// 		$this->form_validation->set_rules('relationship', 'Relationship', 'required');
// 		$this->form_validation->set_rules('e_street', 'Street', 'required');
// 		$this->form_validation->set_rules('e_city', 'City', 'required');
// 		$this->form_validation->set_rules('e_zip', 'Zip Code', 'required');
// 		$this->form_validation->set_rules('e_preferred_phone', 'Preferred Phone', 'required');
// 		$this->form_validation->set_rules('e_email', 'Email', 'required|valid_email');
// 		$this->load->model('State_model');
// 		$data['states'] = $this->State_model->get_states();
// 		if ($this->form_validation->run() == FALSE)
// 		{
// 			$this->load->view('emergency', $data);
// 		}
// 		else
// 		{
			session_start();
			$this->load->model('applicant_model');
			$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
// 			$this->load->view('templates/header');
			$this->load->view('employer');
// 		}
	}
	
	public function add_employer()
	{
		session_start();
		$this->load->view('templates/header');
		$this->load->view('employer');
	}
	
	public function more_employers()
	{
		session_start();
		$this->load->model('employer_Model');
		$employer = new Employer_model();
		$employer->applicant_id = $_SESSION['applicant_id'];
		foreach ($_POST as $key=>$value)
		{
			$employer->$key = $this->input->post($key);
		}
		$employer->save();
		$this->load->view('templates/header');
		$this->load->view('more_employers');
	}
	
	public function program()
		{
			$this->load->view('templates/header');
			$this->load->view('program');
		}
	
	public function demo()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('templates/header');
		$this->form_validation->set_rules('student_type', 'Program Type', 'required');
		$this->form_validation->set_rules('hear', 'How did you hear about us?', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('program');
		}
		else
		{
			session_start();
			$this->load->model('applicant_model');
			$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
// 			$this->load->view('templates/header');
			$this->load->view('demo');
		}
	}
	
	
	public function submit()
	{
		
	session_start();
	$this->load->model('applicant_model');
	$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
	$this->load->view('templates/header');
	$this->load->view('thankyou');
	}
	

	
	
	
	
	

	
	
}