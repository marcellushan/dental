<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index() 
	{	


		$this->load->view('templates/header');
		$this->load->view('applicant');	
	}
	
// 	public function application()
// 	{
// 		$this->load->view('templates/header');
// 		$this->load->view('person');
		
// 	}
	
// 	public function address()
// 	{
// 		session_start();
// 		$this->load->model('person_model');
// 		$person = new Person_model();
// 		foreach ($_POST as $key=>$value)
// 		{
// 			$person->$key = $this->input->post($key);
// 		}
// 		$person->save();
// 		$_SESSION['id'] = $person->person_id;
// 		$this->load->view('templates/header');
// 		$this->load->view('address');
// 	}
	public function address()
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
			$this->load->model('state_model');
			$data['states'] = $this->state_model->get_states();
			$this->load->model('application_Model');
			$application = new Application_model();
			$application->application_date = date('Y-m-d');
// 			$application->person_id = $person->person_id;
			$application->save();
			$this->load->model('person_Model');
			$person = new Person_model();
			foreach ($_POST as $key=>$value)
			{
				$person->$key = $this->input->post($key);
			}
			$person->application_id = $application->application_id;
			$person->person_type = '1';
			$person->save();
			$_SESSION['person_id'] = $person->person_id;
			$_SESSION['application_id'] = $application->application_id;
			$this->load->view('templates/header');
			$this->load->view('address', $data);
// 		}
		
	}
	
	public function phone()
	{
		session_start();
		echo $_SESSION['person_id'];
		$this->load->model('address_Model');
		$address = new Address_model();
		foreach ($_POST as $key=>$value)
		{
			$address->$key = $this->input->post($key);
		}
		$address->person_id = $_SESSION['person_id'];
		$address->save();
		$this->load->view('templates/header');
		$this->load->view('phone');
	}
	
	public function driver()
	{
		session_start();
// 		echo $_SESSION['person_id'];
// 		echo "<pre>";
// 		var_dump($_POST);
// 		echo "</pre>";
		$this->load->model('phone_Model');
		$phone = new Phone_model();
		$phone->phone_number = $_POST['main_phone'];
		$phone->person_id = $_SESSION['person_id'];
		$phone->phone_type = '1';
		$phone->save();
		if(@$_POST['backup_phone']) {
			$phone = new Phone_model();
			$phone->phone_number = $_POST['backup_phone'];
			$phone->person_id = $_SESSION['person_id'];
			$phone->phone_type = '2';
			$phone->save();
		}
		$this->load->model('email_Model');
		$email = new Email_model();
		$email->email_address = $_POST['main_email'];
		$email->person_id = $_SESSION['person_id'];
		$email->email_type = '1';
		$email->save();
		if(@$_POST['backup_email']) {
			$email = new email_model();
			$email->email_address = $_POST['backup_email'];
			$email->person_id = $_SESSION['person_id'];
			$email->email_type = '2';
			$email->save();
		}
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
// 			$target_dir = "/var/www/html/dental/assets/uploads/";
			
			// 			echo $target_dir = "/var/www/html/signage/uploads/";
			$target_file = $target_dir . $myRandom . basename($_FILES["fileToUpload"]["name"]);
			$myFile = basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$image_url = base_url() . "assets/uploads/" .  $myRandom . basename($_FILES["fileToUpload"]["name"]);
			$this->load->model('document_Model');
			$document = new Document_model();
			$document->application_id = $_SESSION['application_id'];
			$document->document_type = 1;
			$document->url = $image_url;
			$document->save();
				
		}
	
		$this->load->view('templates/header');
		$this->load->view('cpr');
	}
	
	public function school()
	{
		session_start();
		$this->load->model('state_model');
		$data['states'] = $this->state_model->get_states();
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
			$this->load->model('document_Model');
			$document = new Document_model();
			$document->application_id = $_SESSION['application_id'];
			$document->expiration_date = $_POST['expiration_date'];
			$document->document_type = 2;
			$document->url = $image_url;
			$document->save();
				
		}
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
		$school->application_id = $_SESSION['application_id'];
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
		$license->application_id = $_SESSION['application_id'];
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
// 		session_start();
// 		$this->load->model('state_model');
// 		$data['states'] = $this->state_model->get_states();
		$this->load->view('templates/header');
		$this->load->view('emergency');
// 		$this->load->view('address', $data);
	}
	
	public function emergency_address()
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
// 				$this->load->model('state_model');
// 				$data['states'] = $this->state_model->get_states();
// 				$this->load->model('application_Model');
// 				$application = new Application_model();
// 				$application->application_date = date('Y-m-d');
// 				// 			$application->person_id = $person->person_id;
// 				$application->save();
				$this->load->model('person_Model');
				$person = new Person_model();
				foreach ($_POST as $key=>$value)
				{
					$person->$key = $this->input->post($key);
				}
				$person->application_id = $application->application_id;
				$person->person_type = '2';
				$person->save();
				$_SESSION['person_id'] = $person->person_id;
				$_SESSION['application_id'] = $application->application_id;
				$this->load->view('templates/header');
				$this->load->view('address', $data);
				// 		}
	
			}
	
	public function employer()
	{
		session_start();
		$this->load->model('person_Model');
		$emergency = new Person_model();
		$emergency->application_id = $_SESSION['application_id'];
		foreach ($_POST as $key=>$value)
		{
			$emergency->$key = $this->input->post($key);
		}
		$emergency->person_type = 2;
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
	
public function program()
	{
		$this->load->view('templates/header');
		$this->load->view('program');
	}
	
	public function demo()
	{
		session_start();
		// 		echo $_SESSION['id'];
		// 				echo "<pre>";
		// 				var_dump($_POST);
		// 				echo "</pre>";
		$this->load->model('program_Model');
		$program = new Program_model();
		$program->application_id = $_SESSION['id'];
		foreach ($_POST as $key=>$value)
		{
			$program->$key = $this->input->post($key);
		}
		$program->save();
// 		echo $_SESSION['demo_id'] = $demo->demo_id;
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
// 		$demo->demo_id = $_SESSION['demo_id'];
// 		$demo->load($_SESSION['demo_id']);
// 		echo "<pre>";
// 		var_dump($demo);
// 		echo "</pre>";
		$demo->application_id = $_SESSION['id'];
		
		foreach ($_POST as $key=>$value)
		{
			$demo->$key = $this->input->post($key);
		}
// echo "<pre>";
// var_dump($demo);
// echo "</pre>";

// $demo->load(32);
// echo $demo->race;
// $demo->race = '4';
// $demo->update();
// 		 echo $demo->update();
$demo->save();
		$this->load->view('templates/header');
		$this->load->view('thankyou');
	}
	

	
	
	
	
	

	
	
}