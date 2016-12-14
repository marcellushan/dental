<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReturningApplicant extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('returning_applicant');
	}
	
	
	public function sections()
	{  
	    session_start();
	    $this->load->model('applicant_Model');
	    $applicant = new Applicant_model();
	    $returning_app= $applicant->get_item('preferred_email', $_POST['email']);

// 	    			echo $returning_app->applicant_id;
	  echo $_SESSION['applicant_id'] = $returning_app->applicant_id;
	    $this->load->view('templates/header');
	    $this->load->view('sections');
	}
	
	public function personal()
	{
		$this->load->model('applicant_Model');
		$applicant = new Applicant_model();
		$this->load->model('State_model');
		$data['states'] = $this->State_model->get_states();
		$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
		$this->load->view('templates/header');
		$this->load->view('personal', $data);
	
	}
	
	
	public function driver()
	{
 		session_start();
 		$this->load->model('applicant_model');
 		$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
 		$this->load->view('templates/header');
 		$this->load->view('driver');
	
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

			session_start();
			$this->load->model('state_model');
			$data['states'] = $this->state_model->get_states();
			$this->load->model('school_Model');
			$school = new School_model();
			$school->applicant_id = $_SESSION['applicant_id'];
			$school->name = $_POST['name'];
			$school->state = $_POST['state'];
			$school->year = $_POST['year'];
			$school->image = $image_url;
			$school->save();
			$this->load->view('license', $data);
	}
	
	
	public function more_licenses()
	{
		$this->load->view('templates/header');
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
// 		$this->load->model('applicant_model');
		$this->load->model('license_Model');
// 		$data = array('image' => $image_url);
// 		$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $data);
			session_start();

			$license = new License_model();
			$license->applicant_id = $_SESSION['applicant_id'];
			$license->number = $_POST['number'];
			$license->state = $_POST['state'];
			$license->active = $_POST['active'];
			$license->image = $image_url;
			$license->save();
			$this->load->view('more_licenses');
	}
	
	
	public function disciplinary()
	{
		$this->load->view('templates/header');
		$this->load->view('disciplinary');
	}
	public function emergency()
	{
		session_start();
		if(@$_POST['discipline'])
		{
			$this->load->model('applicant_model');
			$applicant=$this->applicant_model->update($_SESSION['applicant_id'], array('discipline' => $_POST['discipline_text']));
		}
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
			session_start();
			$this->load->model('applicant_model');
			$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
			$this->load->view('employer');
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
		if(@$_POST['current'])
		{
			$this->load->model('employer_Model');
			$employer = new Employer_model();
			$employer->applicant_id = $_SESSION['applicant_id'];
			$employer->company = $_POST['company'];
			$employer->phone = $_POST['phone'];
			$employer->save();
			$this->load->view('templates/header');
			$this->load->view('more_employers');
		}
		else
		{
			$this->load->view('templates/header');
			$this->load->view('program');
		}
		
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