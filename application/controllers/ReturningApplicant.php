<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReturningApplicant extends CI_Controller {
	
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('returning/applicant');
	}
	
	
	public function viewSections()
	{  
	    session_start();
	    if(@$_POST['email']) {
	        $this->load->model('ApplicantModel');
	        $applicant = new ApplicantModel();
	        $returning_app= $applicant->get_item('preferred_email', $_POST['email']);
	        $_SESSION['applicant_id'] = $returning_app->applicant_id;
	    }
	    $this->load->view('templates/header');
	    $this->load->view('returning/viewSections');
	    
	}
	
	public function viewPersonal()
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
	
	public function updateApplicant() 
	{
	    session_start();
		$this->load->model('ApplicantModel');
		$applicant=$this->ApplicantModel->update($_SESSION['applicant_id'], $_POST);
		$this->load->view('templates/header');
		$this->load->view('returning/viewSections');
	}
	
	public function viewIdentification()
	{
		session_start();
		$this->load->model('IdentificationModel');
		$data['identification']=$this->IdentificationModel->get_item('applicant_id', $_SESSION['applicant_id']);
// 		var_dump($data['identification']);
		$_SESSION['identification_id'] = $data['identification']->identification_id;
		$this->load->view('templates/header');
		$this->load->view('returning/identification',$data);
		$this->load->view('templates/footer');
	
	}
		
	public function updateIdentification()
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
		}
		$this->load->model('IdentificationModel');
		$applicant=$this->IdentificationModel->update($_SESSION['identification_id'], array('image' => $image_url,'submission_date' => date('Y-m-d')));
		$this->load->view('templates/header');
		$this->load->view('returning/viewSections');
	}
		
	
	public function viewCpr()
	{
		
	    session_start();
	    $this->load->model('CprModel');
	    $data['cpr']=$this->CprModel->get_item('applicant_id', $_SESSION['applicant_id']);
	    $_SESSION['cpr_id'] = $data['cpr']->cpr_id;
	    $this->load->view('templates/header');
		$this->load->view('returning/cpr',$data);
		$this->load->view('templates/footer');
	}
	
	public function updateCpr()
	{
		session_start();
// 		echo $_SESSION['identification_id'];
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
		}
		$this->load->model('CprModel');
		$applicant=$this->CprModel->update($_SESSION['cpr_id'], array('image' => $image_url, 'submission_date' => date('Y-m-d'), 'expiration_date' => $_POST['expiration_date']));
		$this->load->view('templates/header');
		$this->load->view('returning/viewSections');
	}
	
	
	public function viewSchool()
	{
			session_start();
			$this->load->view('templates/header');
			$this->load->model('SchoolModel');
			$data['school'] = $this->SchoolModel->get_item('applicant_id', $_SESSION['applicant_id']);
			if($data['school']) {
				echo $_SESSION['school_id'] = $data['school']->school_id;
				echo $_SESSION['image'] = $data['school']->image;
				$this->load->view('returning/school', $data);
			} else {
				$this->load->model('StateModel');
				$data['states'] = $this->StateModel->get_states();
				$this->load->view('returning/new_school', $data);
			}
			$this->load->view('templates/footer');
	}
	
	public function updateSchool()
	{
		session_start();
				echo $_SESSION['school_id'];
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
		}
		(@$image_url ? "" : $image_url = $_SESSION['image']);
		$this->load->model('SchoolModel');
		$applicant=$this->SchoolModel->update($_SESSION['school_id'], array('name' => $_POST['name'], 'image' => @$image_url, 'submission_date' => date('Y-m-d')));
		$this->load->view('templates/header');
		$this->load->view('returning/viewSections');
	}
	
	
	public function listLicenses()
	{
		session_start();
		$this->load->model('StateModel');
		$data['states'] = $this->StateModel->get_states();
		$this->load->view('templates/header');
		$this->load->model('LicenseModel');
		$data['licenses'] = $this->LicenseModel->get_list('applicant_id', $_SESSION['applicant_id']);
// 		var_dump($data['licenses']);
		if($data['licenses']) {
			$this->load->view('returning/list_licenses', $data);
		} else {
			$this->load->model('StateModel');
			$data['states'] = $this->StateModel->get_states();
			$this->load->view('returning/new_license', $data);
		}
		$this->load->view('templates/footer');
	}
	
	public function viewLicense($license_id)
	{
		session_start();
		$this->load->view('templates/header');
		$this->load->model('LicenseModel');
	    $data['license']=$this->LicenseModel->load($license_id);
	    $_SESSION['license_id'] = $license_id;
	    $this->load->view('returning/license', $data);
		$this->load->view('templates/footer');
	}
	
	public function updateLicense()
	{
		session_start();
				echo $_SESSION['license_id'];
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
		}
		$this->load->model('LicenseModel');
		$applicant=$this->LicenseModel->update($_SESSION['license_id'], array('image' => $image_url, 
				'state' => $_POST['state'], 'number' => $_POST['number'], 'active' => @$_POST['active'], 'submission_date' => date('Y-m-d')));
		$this->load->view('templates/header');
		$this->load->view('returning/viewSections');
	}
	
	
	
	public function newLicense()
	{
		session_start();
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
			$this->load->model('LicenseModel');
			$license = new LicenseModel();
			$license->applicant_id = $_SESSION['applicant_id'];
			$license->number = $_POST['number'];
			$license->state = $_POST['state'];
			$license->active = @$_POST['active'];
			$license->submission_date = date('Y-m-d');
			$license->image = $image_url;
			$license->save();
		}
		$this->load->view('templates/header');
		$this->load->view('returning/viewSections');
	}
	
		
	public function viewDisciplinary()
	{
		session_start();
		$this->load->view('templates/header');
		$this->load->model('ApplicantModel');
		$applicant = new ApplicantModel();
		$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
		if(@$data['applicant']->disciplinary) {
			$this->load->view('returning/disciplinary', $data);
		} else {
			$this->load->view('returning/new_disciplinary');
		}

		$this->load->view('templates/footer');
	}
	public function viewEmergency()
	{
		session_start();
		$this->load->model('ApplicantModel');
		$applicant = new ApplicantModel();
		$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
// 		var_dump($data);
		$this->load->model('stateModel');
		$data['states'] = $this->stateModel->get_states();
		$this->load->view('templates/header');
		$this->load->view('returning/emergency', $data);
		$this->load->view('templates/footer');
	}
	
	public function viewEmployer()
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
	
	public function viewProgram()
		{
			session_start();
			$this->load->model('ApplicantModel');
			$applicant = new ApplicantModel();
			$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
			$this->load->view('templates/header');
			$this->load->view('returning/program', $data);
			$this->load->view('templates/footer');
		}
	
	public function viewDemo()
	{

		session_start();
		$this->load->model('ApplicantModel');
		$applicant = new ApplicantModel();
		$data['applicant'] = $applicant->load($_SESSION['applicant_id']);
		$this->load->view('templates/header');
		$this->load->view('returning/demo', $data);
		$this->load->view('templates/footer');
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