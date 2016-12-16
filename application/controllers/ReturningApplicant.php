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
	    if(@$_POST['email']) {
	        $this->load->model('ApplicantModel');
	        $applicant = new ApplicantModel();
	        $returning_app= $applicant->get_item('preferred_email', $_POST['email']);
	        $_SESSION['applicant_id'] = $returning_app->applicant_id;
	    }
	    $this->load->view('templates/header');
	    $this->load->view('returning/sections');
	    
	}
	
	public function personal()
	{
	    session_start();
	    $this->load->model('ApplicantModel');
		$applicant = new ApplicantModel();
		$this->load->model('StateModel');
		$data['states'] = $this->StateModel->get_states();
		$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
		$this->load->view('templates/header');
		$this->load->view('returning/personal', $data);
		$this->load->view('templates/footer');
	
	}
	
	public function update() 
	{
	    session_start();
		$this->load->model('ApplicantModel');
		$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
		$this->load->view('templates/header');
		$this->load->view('returning/sections');
	}
	
	public function addIdentification() 
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
    		$this->load->model('identificationModel');
			$identification = new IdentificationModel();
			$identification->applicant_id = $_SESSION['applicant_id'];
// 			$document->document_type = 1;
			$identification->submission_date = date('Y-m-d');
			$identification->image = $image_url;
			$identification->save();
    	}
    	$this->load->view('templates/header');
    	$this->load->view('sections');
    	 
	}
	
	
	public function identification()
	{
 		session_start();
 		$this->load->model('identificationModel');
 		$data['identifications']=$this->identificationModel->get_list('applicant_id', $_SESSION['applicant_id']);
//  		var_dump($identification);
 		$this->load->view('templates/header');
 		$this->load->view('identification',$data);
 		$this->load->view('templates/footer');
	
	}
	
	
	public function cpr()
	{
		
	    session_start();
	    $this->load->model('CPRModel');
	    $data['CPRs']=$this->CPRModel->get_list('applicant_id', $_SESSION['applicant_id']);
// 	     		var_dump($data['CPRs']);
	    $this->load->view('templates/header');
		$this->load->view('cpr',$data);
		$this->load->view('templates/footer');
	}
	
	public function addCPR() 
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
	        $this->load->model('CPRModel');
	        $CPR = new CPRModel();
	        $CPR->applicant_id = $_SESSION['applicant_id'];
	        // 			$document->document_type = 1;
	        $CPR->submission_date = date('Y-m-d');
	        $CPR->expiration_date = $_POST['expiration_date'];
	        $CPR->image = $image_url;
	        $CPR->save();
	    }
	    $this->load->view('templates/header');
	    $this->load->view('sections');
	
	}
	
	public function school()
	{

			$this->load->model('StateModel');
			$data['states'] = $this->StateModel->get_states();
			session_start();
			$this->load->model('SchoolModel');
			$data['school'] = $this->SchoolModel->get_item('applicant_id', $_SESSION['applicant_id']);
			$this->load->view('templates/header');
			$this->load->view('returning_school', $data);
			$this->load->view('templates/footer');
	}
	
	public function license()
	{
			session_start();
			$this->load->model('stateModel');
			$data['states'] = $this->stateModel->get_states();
	    	$this->load->view('templates/header');
			$this->load->view('license', $data);
			$this->load->view('templates/footer');
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
		$this->load->model('license_Model');
// 		$data = array('image' => $image_url);
// 		$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $data);
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
		$this->load->view('templates/footer');
	}
	public function emergency()
	{
		session_start();
		if(@$_POST['discipline'])
		{
			$this->load->model('ApplicantModel');
			$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], array('discipline' => $_POST['discipline_text']));
		}
		$this->load->model('stateModel');
		$data['states'] = $this->stateModel->get_states();
		$this->load->view('templates/header');
		$this->load->view('emergency', $data);
		$this->load->view('templates/footer');
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
			$this->load->view('templates/footer');
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
	$this->load->model('ApplicantModel');
	$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
	$this->load->view('templates/header');
	$this->load->view('thankyou');
	}
	

	
	
	
	
	

	
	
}