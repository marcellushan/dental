<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NewApplicant extends CI_Controller {
    
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('new/applicant');
	}
	
	public function createLogin()
	{
	    $this->load->view('templates/header');
	    $this->load->view('new/applicant');
	}

	public function createApplication()
	{
		session_start();
		if ($this->form_validation->run() == TRUE)
		{
			$this->load->view('templates/header');
			$this->load->view('new/applicant');
		}
		else 
		{
			$this->load->model('ApplicantModel');
			$applicant = new ApplicantModel();
			$this->load->model('StateModel');
			$data['states'] = $this->StateModel->get_states();
			$applicant->application_date = date('Y-m-d');
			$applicant->preferred_email = $_POST['email'];
			$applicant->password = $_POST['password'];
			$applicant->save();
			$_SESSION['applicant_id'] = $applicant->applicant_id;
			$data['applicant'] = $applicant->load($applicant->applicant_id);
			$this->load->view('templates/header');
			$this->load->view('new/personal', $data);
		}

		

	
	}
	
	
    public function updateApplicant($destination) 
	{
	    session_start();
// 	    var_dump($_POST);
		$this->load->model('ApplicantModel');
		$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
		$this->load->view('templates/header');
		$this->load->view('new/' . $destination);
	}
	
	
	public function createImage($imageType, $nextPage)
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
			$this->load->model('ApplicantModel');
// 			$data = array('driver' => $image_url);
			$modelName = $imageType . 'Model';
			$this->load->model($imageType . 'Model');
			$image = new $modelName();
			$image->applicant_id = $_SESSION['applicant_id'];
			($imageType == 'cpr' ? $image->expiration_date = $_POST['expiration_date'] :"");
			$image->submission_date = date('Y-m-d');
			$image->image = $image_url;
// 			var_dump($image);
			$image->save();
		}
	
		$this->load->view('templates/header');
		$this->load->view('new/' . $nextPage);
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
				$this->load->model('CPRModel');
    			$CPR = new CPRModel();
    			$CPR->applicant_id = $_SESSION['applicant_id'];
    			$CPR->submission_date = date('Y-m-d');
    			$CPR->expiration_date = $_POST['expiration_date'];
    			$CPR->image = $image_url;
    			$CPR->save();
// var_dump($_POST);
					
			}
			$this->load->model('StateModel');
			$data['states'] = $this->StateModel->get_states();
// 			$this->load->view('templates/header');
			$this->load->view('school', $data);
		}
	}
	
	public function license()
	{
	    session_start();
	    $this->load->view('templates/header');
	    if(@$_FILES) {
		    
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
			$this->load->model('schoolModel');
			$school = new SchoolModel();
			$school->applicant_id = $_SESSION['applicant_id'];
			$school->submission_date = date('Y-m-d');
			$school->name = $_POST['name'];
			$school->state = $_POST['state'];
			$school->year = $_POST['year'];
			$school->image = $image_url;
			$school->save();
	    }
			$this->load->model('StateModel');
			$data['states'] = $this->StateModel->get_states();
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
// 		$this->load->model('ApplicantModel');
		$this->load->model('LicenseModel');
// 		$data = array('image' => $image_url);
// 		$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $data);
			session_start();

			$license = new LicenseModel();
			$license->applicant_id = $_SESSION['applicant_id'];
			$license->submission_date = date('Y-m-d');
			$license->number = $_POST['number'];
			$license->state = $_POST['state'];
			$license->active = @$_POST['active'];
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
			$this->load->model('ApplicantModel');
			$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], array('discipline' => $_POST['discipline_text']));
		}
		$this->load->model('StateModel');
		$data['states'] = $this->StateModel->get_states();
		$this->load->view('templates/header');
		$this->load->view('new/emergency', $data);
	}
	
	public function employer()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('templates/header');
			session_start();
			$this->load->model('ApplicantModel');
			$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
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
			$this->load->model('ApplicantModel');
			$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
// 			$this->load->view('templates/header');
			$this->load->view('demo');
		}
	}
	
	
	public function submit()
	{
		
	session_start();
	var_dump($_POST);
	$this->load->model('ApplicantModel');
	$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
	$this->load->view('templates/header');
	$this->load->view('thankyou');
	}
	

	
	
	
	
	

	
	
}