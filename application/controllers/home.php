<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index() 
	{	

		$this->load->model('State_model');

		$data['states'] = $this->State_model->get_states();
		$this->load->view('templates/header');
		$this->load->view('applicant', $data);	
	}
	
	public function driver()
	{		
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
			$this->load->view('templates/header');
			$this->load->view('driver');

		
	}
	
	public function cpr()
	{
		session_start();
// 		$_SESSION['driver'] =true;
		if(!@$_FILES['fileToUpload']['error']) {
				
			$myRandom = rand(1, 10000);
			// 			echo "<pre>";
			// 			print_r($_FILES);
			// 			echo "</pre>";
			// 			($servername=='localhost' ? $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/printing/uploads/" : $target_dir = "/var/www/html/printing/uploads/");
			$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/dental/assets/uploads/";
			// webdev
// 			$target_dir = "/var/www/html/dental/assets/uploads/";
			
			// 			echo $target_dir = "/var/www/html/signage/uploads/";
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
		session_start();
		if(!@$_FILES['fileToUpload']['error']) {
				
			$myRandom = rand(1, 10000);
			// 			echo "<pre>";
			// 			print_r($_FILES);
			// 			echo "</pre>";
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
		$this->load->view('templates/header');
		$this->load->view('school', $data);
	}
	
	public function license()
	{
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
		$this->load->view('templates/header');
		$this->load->view('license', $data);
}
	
public function more_licenses()
{
		session_start();
		$this->load->model('license_Model');
		$license = new License_model();
		$license->applicant_id = $_SESSION['applicant_id'];
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
		session_start();
		$this->load->model('state_model');
		$data['states'] = $this->state_model->get_states();
		$this->load->view('templates/header');
		$this->load->view('emergency', $data);
// 		$this->load->view('address', $data);
	}
	
	public function employer()
	{
		session_start();

			$this->load->model('applicant_model');
			$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
			
		$this->load->view('templates/header');
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
		session_start();
		$this->load->model('applicant_model');
		$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
		$this->load->view('templates/header');
		$this->load->view('demo');
	}
	
	
	public function submit()
	{
session_start();
// 		echo "<pre>";
// 		var_dump($_POST);
// 		echo "</pre>";
		$this->load->model('applicant_model');
		$applicant=$this->applicant_model->update($_SESSION['applicant_id'], $_POST);
		$this->load->view('templates/header');
		$this->load->view('thankyou');
	}
	

	
	
	
	
	

	
	
}